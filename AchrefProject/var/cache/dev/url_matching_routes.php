<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/chauffeur/back' => [[['_route' => 'app_chauffeur_index_back', '_controller' => 'App\\Controller\\ChauffeurController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/chauffeur/back/new' => [[['_route' => 'app_chauffeur_new_back', '_controller' => 'App\\Controller\\ChauffeurController::newback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/infotrafic' => [[['_route' => 'app_infotrafic_index', '_controller' => 'App\\Controller\\InfotraficController::index'], null, ['GET' => 0], null, true, false, null]],
        '/infotrafic/back' => [[['_route' => 'app_infotrafic_index_back', '_controller' => 'App\\Controller\\InfotraficController::indexback'], null, ['GET' => 0], null, false, false, null]],
        '/infotrafic/new' => [[['_route' => 'app_infotrafic_new', '_controller' => 'App\\Controller\\InfotraficController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/infotrafic/back/new' => [[['_route' => 'app_infotrafic_new_back', '_controller' => 'App\\Controller\\InfotraficController::newback'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/chauffeur/(?'
                    .'|back/([^/]++)(?'
                        .'|(*:37)'
                        .'|/edit(*:49)'
                    .')'
                    .'|([^/]++)(*:65)'
                    .'|statistics(*:82)'
                .')'
                .'|/infotrafic/(?'
                    .'|([^/]++)(*:113)'
                    .'|back/([^/]++)(*:134)'
                    .'|([^/]++)/edit(*:155)'
                    .'|back/([^/]++)/edit(*:181)'
                    .'|([^/]++)(*:197)'
                    .'|back/([^/]++)(*:218)'
                    .'|infotraffic/([^/]++)/(?'
                        .'|like(*:254)'
                        .'|dislike(*:269)'
                    .')'
                    .'|ajax_search(*:289)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:326)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'app_chauffeur_show_back', '_controller' => 'App\\Controller\\ChauffeurController::showback'], ['id'], ['GET' => 0], null, false, true, null]],
        49 => [[['_route' => 'app_chauffeur_edit_back', '_controller' => 'App\\Controller\\ChauffeurController::editback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        65 => [[['_route' => 'app_chauffeur_delete', '_controller' => 'App\\Controller\\ChauffeurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        82 => [[['_route' => 'app_chauffeur_statistics', '_controller' => 'App\\Controller\\InfoTrafficChauffeurController::index'], [], null, null, false, false, null]],
        113 => [[['_route' => 'app_infotrafic_show', '_controller' => 'App\\Controller\\InfotraficController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        134 => [[['_route' => 'app_infotrafic_show_back', '_controller' => 'App\\Controller\\InfotraficController::showback'], ['id'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'app_infotrafic_edit', '_controller' => 'App\\Controller\\InfotraficController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        181 => [[['_route' => 'app_infotrafic_edit_back', '_controller' => 'App\\Controller\\InfotraficController::editback'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        197 => [[['_route' => 'app_infotrafic_delete', '_controller' => 'App\\Controller\\InfotraficController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        218 => [[['_route' => 'app_infotrafic_delete_back', '_controller' => 'App\\Controller\\InfotraficController::deleteback'], ['id'], ['POST' => 0], null, false, true, null]],
        254 => [[['_route' => 'app_infotraffic_like', '_controller' => 'App\\Controller\\InfotraficController::like'], ['infoid'], ['POST' => 0], null, false, false, null]],
        269 => [[['_route' => 'app_infotraffic_dislike', '_controller' => 'App\\Controller\\InfotraficController::dislike'], ['infoid'], ['POST' => 0], null, false, false, null]],
        289 => [[['_route' => 'ajax_search', '_controller' => 'App\\Controller\\InfotraficController::chercherInfotrafic'], [], null, null, true, false, null]],
        326 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
