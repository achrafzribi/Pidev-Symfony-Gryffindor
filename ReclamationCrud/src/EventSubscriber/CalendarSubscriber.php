<?php

namespace App\EventSubscriber;


use CalendarBundle\CalendarEvents;
use CalendarBundle\Entity\Event;
use CalendarBundle\Event\CalendarEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Entity\Calendar;


class CalendarSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            CalendarEvents::SET_DATA => 'onCalendarSetData',
        ];
    }

    public function onCalendarSetData(CalendarEvent $calendar)
    {
        $start = $calendar->getStart();
        $end = $calendar->getEnd();
        $filters = $calendar->getFilters();
    
        // Fetch the Calendar entities from the database that have a start date within the range of the calendar view
        $calendars = $this->entityManager->getRepository(Calendar::class)
            ->createQueryBuilder('c')
            ->where('c.startDate BETWEEN :start AND :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getResult();
    
        // Create an Event object for each Calendar entity and add it to the calendar
        foreach ($calendars as $calendar) {
            $event = new Event(
                $calendar->getTitle(),
                $calendar->getStartDate(),
                $calendar->getEndDate()
            );
    
            // Add any additional data to the Event object
            $event->addOption('description', $calendar->getDescription());
    
            $calendar->addEvent($event);
        }
    }
}