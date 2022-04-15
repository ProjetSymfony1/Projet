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
        '/updateInfo' => [[['_route' => 'updateInfo', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
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
                .'|/(en|fr)(?'
                    .'|/(?'
                        .'|ad(?'
                            .'|min/(?'
                                .'|c(?'
                                    .'|lientData(*:208)'
                                    .'|onfirmBooking(*:229)'
                                    .'|heckMessage(*:248)'
                                .')'
                                .'|a(?'
                                    .'|dminManageBookings(*:279)'
                                    .'|rchiveBooking(*:300)'
                                .')'
                                .'|message(*:316)'
                                .'|orders(*:330)'
                            .')'
                            .'|d(?'
                                .'|Cart(*:347)'
                                .'|Favoris(*:362)'
                                .'|Dish(*:374)'
                            .')'
                        .')'
                        .'|c(?'
                            .'|a(?'
                                .'|rt(*:394)'
                                .'|ncel(?'
                                    .'|Booking(*:416)'
                                    .'|Order(*:429)'
                                .')'
                            .')'
                            .'|on(?'
                                .'|tact(*:448)'
                                .'|firmOrder(*:465)'
                            .')'
                        .')'
                        .'|re(?'
                            .'|move(*:484)'
                            .'|servation(*:501)'
                            .'|gister(*:515)'
                        .')'
                        .'|m(?'
                            .'|inusDish(*:536)'
                            .'|enu(*:547)'
                            .'|a(?'
                                .'|nageBooking(*:570)'
                                .'|keOrder(*:585)'
                            .')'
                            .'|yAccount(*:602)'
                        .')'
                        .'|plusDish(*:619)'
                        .'|favoris(*:634)'
                        .'|s(?'
                            .'|upFavoris(*:655)'
                            .'|howOrder(*:671)'
                        .')'
                        .'|u(?'
                            .'|pdateDish(*:693)'
                            .'|ser/(?'
                                .'|message(*:715)'
                                .'|delMessage(*:733)'
                            .')'
                        .')'
                        .'|delDish(*:750)'
                        .'|order(?'
                            .'|(*:766)'
                            .'|Detail(*:780)'
                        .')'
                        .'|Booking(*:796)'
                        .'|log(?'
                            .'|in(*:812)'
                            .'|out(*:823)'
                        .')'
                    .')'
                    .'|(*:833)'
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
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        208 => [[['_route' => 'clientData', '_controller' => 'App\\Controller\\AdminController::getClientData'], ['_locale'], null, null, false, false, null]],
        229 => [[['_route' => 'confirmBooking', '_controller' => 'App\\Controller\\ManageBookings::confirmBooking'], ['_locale'], null, null, false, false, null]],
        248 => [[['_route' => 'checkMessage', '_controller' => 'App\\Controller\\MessageController::checkMessage'], ['_locale'], null, null, false, false, null]],
        279 => [[['_route' => 'adminBookings', '_controller' => 'App\\Controller\\ManageBookings::adminManageBookings'], ['_locale'], null, null, false, false, null]],
        300 => [[['_route' => 'archiveBooking', '_controller' => 'App\\Controller\\ManageBookings::archiveBooking'], ['_locale'], null, null, false, false, null]],
        316 => [[['_route' => 'adminMessages', '_controller' => 'App\\Controller\\MessageController::getMessages'], ['_locale'], null, null, false, false, null]],
        330 => [[['_route' => 'orders', '_controller' => 'App\\Controller\\OrderController::getOrders'], ['_locale'], null, null, false, false, null]],
        347 => [[['_route' => 'add-cart', '_controller' => 'App\\Controller\\CartController::addCart'], ['_locale'], null, null, false, false, null]],
        362 => [[['_route' => 'add-fav', '_controller' => 'App\\Controller\\FavoriteController::addFav'], ['_locale'], null, null, false, false, null]],
        374 => [[['_route' => 'add-dish', '_controller' => 'App\\Controller\\MenuController::add'], ['_locale'], null, null, false, false, null]],
        394 => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::cart'], ['_locale'], null, null, false, false, null]],
        416 => [[['_route' => 'cancelBooking', '_controller' => 'App\\Controller\\ManageBookings::cancelBooking'], ['_locale'], null, null, false, false, null]],
        429 => [[['_route' => 'cancel-order', '_controller' => 'App\\Controller\\OrderController::cancelOrder'], ['_locale'], null, null, false, false, null]],
        448 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MessageController::message'], ['_locale'], null, null, false, false, null]],
        465 => [[['_route' => 'confirm-order', '_controller' => 'App\\Controller\\OrderController::confirmOrder'], ['_locale'], null, null, false, false, null]],
        484 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\CartController::remove'], ['_locale'], null, null, false, false, null]],
        501 => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\HomepageController::book'], ['_locale'], null, null, false, false, null]],
        515 => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], ['_locale'], null, null, false, false, null]],
        536 => [[['_route' => 'minus', '_controller' => 'App\\Controller\\CartController::minus'], ['_locale'], null, null, false, false, null]],
        547 => [[['_route' => 'menu', '_controller' => 'App\\Controller\\HomepageController::menu'], ['_locale'], null, null, false, false, null]],
        570 => [[['_route' => 'manageBookings', '_controller' => 'App\\Controller\\ManageBookings::booking'], ['_locale'], null, null, false, false, null]],
        585 => [[['_route' => 'make-order', '_controller' => 'App\\Controller\\OrderController::makeOrder'], ['_locale'], null, null, false, false, null]],
        602 => [[['_route' => 'account', '_controller' => 'App\\Controller\\UserController::myAccount'], ['_locale'], null, null, false, false, null]],
        619 => [[['_route' => 'plus', '_controller' => 'App\\Controller\\CartController::plus'], ['_locale'], null, null, false, false, null]],
        634 => [[['_route' => 'favoris', '_controller' => 'App\\Controller\\FavoriteController::menu'], ['_locale'], null, null, false, false, null]],
        655 => [[['_route' => 'del-fav', '_controller' => 'App\\Controller\\FavoriteController::delFav'], ['_locale'], null, null, false, false, null]],
        671 => [[['_route' => 'show-order', '_controller' => 'App\\Controller\\OrderController::showOrder'], ['_locale'], null, null, false, false, null]],
        693 => [[['_route' => 'update-dish', '_controller' => 'App\\Controller\\MenuController::update'], ['_locale'], null, null, false, false, null]],
        715 => [[['_route' => 'userMessages', '_controller' => 'App\\Controller\\MessageController::mesMessages'], ['_locale'], null, null, false, false, null]],
        733 => [[['_route' => 'delMessage', '_controller' => 'App\\Controller\\MessageController::delMessage'], ['_locale'], null, null, false, false, null]],
        750 => [[['_route' => 'del-dish', '_controller' => 'App\\Controller\\MenuController::del'], ['_locale'], null, null, false, false, null]],
        766 => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::order'], ['_locale'], null, null, false, false, null]],
        780 => [[['_route' => 'order-detail', '_controller' => 'App\\Controller\\OrderController::orderDetail'], ['_locale'], null, null, false, false, null]],
        796 => [[['_route' => 'app_booking', '_controller' => 'App\\Controller\\ReservationController::book'], ['_locale'], null, null, false, false, null]],
        812 => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], ['_locale'], null, null, false, false, null]],
        823 => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], ['_locale'], null, null, false, false, null]],
        833 => [
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::home'], ['_locale'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
