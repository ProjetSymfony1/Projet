<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'favoris' => [[], ['_controller' => 'App\\Controller\\FavoriteController::menu'], [], [['text', '/favoris']], [], [], []],
    'add-fav' => [[], ['_controller' => 'App\\Controller\\FavoriteController::addFav'], [], [['text', '/ajoutFavoris']], [], [], []],
    'del-fav' => [[], ['_controller' => 'App\\Controller\\FavoriteController::delFav'], [], [['text', '/supFavoris']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomepageController::home'], [], [['text', '/']], [], [], []],
    'menu' => [[], ['_controller' => 'App\\Controller\\HomepageController::menu'], [], [['text', '/menu']], [], [], []],
    'reservation' => [[], ['_controller' => 'App\\Controller\\HomepageController::book'], [], [['text', '/reservation']], [], [], []],
    'add_dish' => [[], ['_controller' => 'App\\Controller\\MenuController::add'], [], [['text', '/addDish']], [], [], []],
<<<<<<< HEAD
    'contact' => [[], ['_controller' => 'App\\Controller\\MessageController::message'], [], [['text', '/contact']], [], [], []],
    'userMessages' => [[], ['_controller' => 'App\\Controller\\MessageController::mesMessages'], [], [['text', '/user/message']], [], [], []],
    'delMessage' => [[], ['_controller' => 'App\\Controller\\MessageController::delMessage'], [], [['text', '/user/delMessage']], [], [], []],
    'adminMessages' => [[], ['_controller' => 'App\\Controller\\MessageController::getMessages'], [], [['text', '/admin/message']], [], [], []],
    'checkMessage' => [[], ['_controller' => 'App\\Controller\\MessageController::checkMessage'], [], [['text', '/user/checkMessage']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\MessageController::message'], [], [['text', '/contact']], [], [], []],
=======
>>>>>>> parent of 4639dfb5 (UserInterface&AdminInterface for messages, option delete and update)
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
];
