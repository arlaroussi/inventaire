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
        '/logout' => [[['_route' => 'logout'], null, null, null, false, false, null]],
        '/add_article' => [[['_route' => 'add_art', '_controller' => 'App\\Controller\\ArticleController::creerArticle'], null, null, null, false, false, null]],
        '/article/afficher' => [[['_route' => 'affichage_final', '_controller' => 'App\\Controller\\ArticleController::indexAction'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'categorie', '_controller' => 'App\\Controller\\CategorieController::index'], null, null, null, false, false, null]],
        '/categorie/add_categorie' => [[['_route' => 'add_categ', '_controller' => 'App\\Controller\\CategorieController::creerCategorie'], null, null, null, false, false, null]],
        '/products' => [[['_route' => 'app_categorie_list', '_controller' => 'App\\Controller\\CategorieController::list'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/logger' => [[['_route' => 'r_logger', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/user/register' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\UserController::register'], null, null, null, false, false, null]],
        '/user/dash' => [[['_route' => 'user_dash', '_controller' => 'App\\Controller\\UserController::dashboard'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/a(?'
                    .'|fficher_art/([^/]++)(*:194)'
                    .'|rticle/(?'
                        .'|update/(?'
                            .'|([^/]++)(*:230)'
                            .'|register(*:246)'
                        .')'
                        .'|verif/supprimer/([^/]++)(*:279)'
                        .'|supprimer/([^/]++)(*:305)'
                    .')'
                .')'
                .'|/liste_art_categ/([^/]++)(*:340)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'listeart', '_controller' => 'App\\Controller\\ArticleController::afficherArticles'], ['id'], null, null, false, true, null]],
        230 => [[['_route' => 'upd_route', '_controller' => 'App\\Controller\\ArticleController::updateAction'], ['id'], null, null, false, true, null]],
        246 => [[['_route' => 'r_register', '_controller' => 'App\\Controller\\ArticleController::register'], [], null, null, false, false, null]],
        279 => [[['_route' => 'verif_del_art', '_controller' => 'App\\Controller\\ArticleController::deleteVerif'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'del_art', '_controller' => 'App\\Controller\\ArticleController::deleterArticle'], ['id'], null, null, false, true, null]],
        340 => [
            [['_route' => 'listeartcateg', '_controller' => 'App\\Controller\\ArticleController::listerArtParCateg1'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
