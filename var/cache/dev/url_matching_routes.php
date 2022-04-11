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
        '/admin/clientData' => [[['_route' => 'clientData', '_controller' => 'App\\Controller\\AdminController::getClientData'], null, null, null, false, false, null]],
        '/cart' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::cart'], null, null, null, false, false, null]],
        '/addCart' => [[['_route' => 'add-cart', '_controller' => 'App\\Controller\\CartController::addCart'], null, null, null, false, false, null]],
        '/remove' => [[['_route' => 'remove', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/minusDish' => [[['_route' => 'minus', '_controller' => 'App\\Controller\\CartController::minus'], null, null, null, false, false, null]],
        '/plusDish' => [[['_route' => 'plus', '_controller' => 'App\\Controller\\CartController::plus'], null, null, null, false, false, null]],
        '/favoris' => [[['_route' => 'favoris', '_controller' => 'App\\Controller\\FavoriteController::menu'], null, null, null, false, false, null]],
        '/addFavoris' => [[['_route' => 'add-fav', '_controller' => 'App\\Controller\\FavoriteController::addFav'], null, null, null, false, false, null]],
        '/supFavoris' => [[['_route' => 'del-fav', '_controller' => 'App\\Controller\\FavoriteController::delFav'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::home'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'menu', '_controller' => 'App\\Controller\\HomepageController::menu'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'reservation', '_controller' => 'App\\Controller\\HomepageController::book'], null, null, null, false, false, null]],
        '/manageBooking' => [[['_route' => 'manageBookings', '_controller' => 'App\\Controller\\ManageBookings::booking'], null, null, null, false, false, null]],
        '/admin/adminManageBookings' => [[['_route' => 'adminBookings', '_controller' => 'App\\Controller\\ManageBookings::adminManageBookings'], null, null, null, false, false, null]],
        '/admin/confirmBooking' => [[['_route' => 'confirmBooking', '_controller' => 'App\\Controller\\ManageBookings::confirmBooking'], null, null, null, false, false, null]],
        '/cancelBooking' => [[['_route' => 'cancelBooking', '_controller' => 'App\\Controller\\ManageBookings::cancelBooking'], null, null, null, false, false, null]],
        '/admin/archiveBooking' => [[['_route' => 'archiveBooking', '_controller' => 'App\\Controller\\ManageBookings::archiveBooking'], null, null, null, false, false, null]],
        '/addDish' => [[['_route' => 'add-dish', '_controller' => 'App\\Controller\\MenuController::add'], null, null, null, false, false, null]],
        '/delDish' => [[['_route' => 'del-dish', '_controller' => 'App\\Controller\\MenuController::del'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\MessageController::message'], null, null, null, false, false, null]],
        '/user/message' => [[['_route' => 'userMessages', '_controller' => 'App\\Controller\\MessageController::mesMessages'], null, null, null, false, false, null]],
        '/user/delMessage' => [[['_route' => 'delMessage', '_controller' => 'App\\Controller\\MessageController::delMessage'], null, null, null, false, false, null]],
        '/admin/message' => [[['_route' => 'adminMessages', '_controller' => 'App\\Controller\\MessageController::getMessages'], null, null, null, false, false, null]],
        '/admin/checkMessage' => [[['_route' => 'checkMessage', '_controller' => 'App\\Controller\\MessageController::checkMessage'], null, null, null, false, false, null]],
        '/makeOrder' => [[['_route' => 'make-order', '_controller' => 'App\\Controller\\OrderController::makeOrder'], null, null, null, false, false, null]],
        '/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::order'], null, null, null, false, false, null]],
        '/showOrder' => [[['_route' => 'show-order', '_controller' => 'App\\Controller\\OrderController::showOrder'], null, null, null, false, false, null]],
        '/orderDetail' => [[['_route' => 'order-detail', '_controller' => 'App\\Controller\\OrderController::orderDetail'], null, null, null, false, false, null]],
        '/admin/orders' => [[['_route' => 'orders', '_controller' => 'App\\Controller\\OrderController::getOrders'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/Booking' => [[['_route' => 'app_booking', '_controller' => 'App\\Controller\\ReservationController::book'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/myAccount' => [[['_route' => 'account', '_controller' => 'App\\Controller\\UserController::myAccount'], null, null, null, false, false, null]],
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
