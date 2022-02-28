<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
<<<<<<< HEAD
        '/AdminIndex' => [[['_route' => 'indexAdmin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/ajout-compte-admin' => [[['_route' => 'ajoutAdmin', '_controller' => 'App\\Controller\\AdminController::addAdmin'], null, null, null, false, false, null]],
        '/ajout-creneau' => [[['_route' => 'ajoutCreneau', '_controller' => 'App\\Controller\\AdminController::addCreneau'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\HomepageController::home'], null, null, null, false, false, null]],
        '/homeLog' => [[['_route' => 'homeLog', '_controller' => 'App\\Controller\\HomepageController::homeLog'], null, null, null, false, false, null]],
        '/inscriptionForm' => [[['_route' => 'inscriptionForm', '_controller' => 'App\\Controller\\HomepageController::register'], null, null, null, false, false, null]],
        '/connexionForm' => [[['_route' => 'connexionForm', '_controller' => 'App\\Controller\\HomepageController::connect'], null, null, null, false, false, null]],
        '/nos-Menu' => [[['_route' => 'menu', '_controller' => 'App\\Controller\\HomepageController::menu'], null, null, null, false, false, null]],
=======
        '/user/index' => [[['_route' => 'user-index', '_controller' => 'App\\Controller\\UserController::indexUser'], null, null, null, false, false, null]],
        '/user/contactForm' => [[['_route' => 'user-contactForm', '_controller' => 'App\\Controller\\UserController::contactForm'], null, null, null, false, false, null]],
        '/user/updateInfoClient' => [[['_route' => 'user-updateForm', '_controller' => 'App\\Controller\\UserController::updateForm'], null, null, null, false, false, null]],
        '/user/reservation' => [[['_route' => 'user-reserver', '_controller' => 'App\\Controller\\UserController::reserver'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\homepageController::home'], null, null, null, false, false, null]],
        '/inscriptionForm' => [[['_route' => 'inscriptionForm', '_controller' => 'App\\Controller\\homepageController::inscrire'], null, null, null, false, false, null]],
        '/connexionForm' => [[['_route' => 'connexionForm', '_controller' => 'App\\Controller\\homepageController::connecter'], null, null, null, false, false, null]],
        '/reserve-non-connexion' => [[['_route' => 'non-reserver', '_controller' => 'App\\Controller\\homepageController::pasReserver'], null, null, null, false, false, null]],
        '/nos-Menu' => [[['_route' => 'menu', '_controller' => 'App\\Controller\\homepageController::menu'], null, null, null, false, false, null]],
        '/okConnect' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\homepageController::okConnect'], null, null, null, false, false, null]],
>>>>>>> origin/front-end
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
