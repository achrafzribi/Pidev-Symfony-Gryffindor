<?php

namespace App\Service;

use Symfony\Component\HttpClient\HttpClient;

class WeatherService
{
  private $client;
  private $apiKey;

  public function __construct(string $apiKey)
  {
    $this->client = HttpClient::create();
    $this->apiKey = $apiKey;
  }

  /**
   * @return array
   */
  public function getWeather($city)
  {
    try {
      $response = $this->client->request(
        'GET',
        'https://api.openweathermap.org/data/2.5/weather?'
          . 'q=' . $city
          . '&units=metric'
          . '&lang=fr'
          . '&appid=' . $this->apiKey
      );
      $content = $response->getContent();
      $dataRaw = json_decode($content, true);
      $data = [];
      // if no error
      if (is_array($dataRaw)) {
        $data = [
          //cordinates
          'lon'            => $dataRaw['coord']['lon'],         //lontitude
          'lat'            => $dataRaw['coord']['lat'],        //latitude
          //weather
          'wid'            => $dataRaw['weather'][0]['id'],
          'condition'        => $dataRaw['weather'][0]['main'],
          'description'        => ucfirst($dataRaw['weather'][0]['description']),
          'icon_css'        => $this->icon_css($dataRaw['weather'][0]['id']),
          'icon_img'        => $this->icon_img($dataRaw['weather'][0]['icon']),
          // 'icon_custom' 		=> $this->icon_custom($dataRaw['weather'][0]['icon']),

          'base'            => $dataRaw['base'],
          //main
          'temperature'    => round($dataRaw['main']['temp']),
          'pressure'        => $dataRaw['main']['pressure'],
          'humidity'         => $dataRaw['main']['humidity'] . "%",
          'min'            => round($dataRaw['main']['temp_min']),
          'max'            => round($dataRaw['main']['temp_max']),

          //wind
          'wind_speed'    => $this->transform(0, $dataRaw['wind']['speed']),
          'wind_deg'        => $dataRaw['wind']['deg'],
          //sys
          'country_code'    => $dataRaw['sys']['country'],
          'sunrise'        => $dataRaw['sys']['sunrise'],
          'sunset'        => $dataRaw['sys']['sunset'],
          //general
          'country_id'    => $dataRaw['id'],
          'country_name'    => $dataRaw['name'],
          'code'            => $dataRaw['cod'],
          'date'            => gmdate("m-d-Y", $dataRaw['dt']),
          'day'            => $this->transform(1, gmdate("w", $dataRaw['dt']))
        ];
      }
      return $data;
    } catch (\Exception $e) {
      return $e;
    }
  }


  /**
   * @param string $icon 
   * The icon will retreive from OWM as default
   */
  public function icon_img($icon = null)
  {
    return 'http://openweathermap.org/img/w/' . $icon . '.png';
  }

  /**
   * @param string $code 
   * The code will generate css weather icon base on weather code from OWP
   * Required weathericons.io css
   */
  public function icon_css($code = null)
  {
    return "wi wi-owm-" . $code;
  }

  /**
   * @param string $data, $type 
   * transform km/h to mp/h and week days
   */
  public function transform($type, $data)
  {
    /**
     * @param	string	$type	The type of the transformation, 0 for units, 1 for days
     * @param	string	$data	The data to be consumed
     * @return	string
     */

    if ($type == 1) {
      $days = array(
        'Dimanche',
        'Lundi',
        'Mardi',
        'Mercredi',
        'Jeudi',
        'Vendredi',
        'Samedi'
      );
      return $days[$data];
    } else {
      // Transform m/s to km/s
      return round($data * 3600 / 1000, 2) . ' km/h';
    }
  }
}