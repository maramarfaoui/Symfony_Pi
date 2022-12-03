<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/commandpm' => [[['_route' => 'app_commandpm_index', '_controller' => 'App\\Controller\\CommandpmController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commandpm/add' => [[['_route' => 'addcm', '_controller' => 'App\\Controller\\CommandpmController::add'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/historiquevente' => [[['_route' => 'app_historiquevente_index', '_controller' => 'App\\Controller\\HistoriqueventeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/historiquevente/new' => [[['_route' => 'app_historiquevente_new', '_controller' => 'App\\Controller\\HistoriqueventeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'display_produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/triid' => [[['_route' => 'triid', '_controller' => 'App\\Controller\\ProduitController::Triid'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'display_admin', '_controller' => 'App\\Controller\\ProduitController::indexAdmin'], null, null, null, false, false, null]],
        '/boutique' => [[['_route' => 'display_aboutique', '_controller' => 'App\\Controller\\ProduitController::showBoutique'], null, null, null, false, false, null]],
        '/addproduit' => [[['_route' => 'addprod', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produitpm/afficher' => [[['_route' => 'app_produitpm_index', '_controller' => 'App\\Controller\\ProduitpmController::index'], null, ['GET' => 0], null, false, false, null]],
        '/produitpm/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\ProduitpmController::add'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/produitpm/recherche' => [[['_route' => 'recherche', '_controller' => 'App\\Controller\\ProduitpmController::recherche'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/produitpm/editprod' => [[['_route' => 'editprod', '_controller' => 'App\\Controller\\ProduitpmController::editprod'], null, null, null, false, false, null]],
        '/statistique/produit' => [[['_route' => 'app_statistique_produit', '_controller' => 'App\\Controller\\StatistiqueProduitController::index'], null, null, null, false, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/commandpm/(?'
                    .'|commandpm/([^/]++)(*:39)'
                    .'|([^/]++)(?'
                        .'|/edit(*:62)'
                        .'|(*:69)'
                    .')'
                .')'
                .'|/historiquevente/(?'
                    .'|([^/]++)(*:106)'
                    .'|edit/([^/]++)(*:127)'
                    .'|([^/]++)(*:143)'
                .')'
                .'|/listpdf/([^/]++)(*:169)'
                .'|/p(?'
                    .'|agination(?:/([^/]++)(?:/([^/]++))?)?(*:219)'
                    .'|ortfolioDetails/([^/]++)(?'
                        .'|(*:254)'
                        .'|/(?'
                            .'|like(*:270)'
                            .'|dislike(*:285)'
                        .')'
                    .')'
                .')'
                .'|/([^/]++)(*:305)'
                .'|/modifproduit/([^/]++)(*:335)'
                .'|/removeproduit/([^/]+)"(*:366)'
                .'|/produitpm/(?'
                    .'|([^/]++)/edit(*:401)'
                    .'|update/([^/]++)(*:424)'
                    .'|delete/([^/]++)(*:447)'
                .')'
                .'|/stat(*:461)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:500)'
                    .'|wdt/([^/]++)(*:520)'
                    .'|profiler(?'
                        .'|(*:539)'
                        .'|/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:577)'
                                .'|router(*:591)'
                                .'|exception(?'
                                    .'|(*:611)'
                                    .'|\\.css(*:624)'
                                .')'
                            .')'
                            .'|(*:634)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'app_commandpm_show', '_controller' => 'App\\Controller\\CommandpmController::show'], ['idcpm'], ['GET' => 0], null, false, true, null]],
        62 => [[['_route' => 'app_commandpm_edit', '_controller' => 'App\\Controller\\CommandpmController::edit'], ['idcpm'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        69 => [[['_route' => 'app_commandpm_delete', '_controller' => 'App\\Controller\\CommandpmController::delete'], ['idcpm'], ['POST' => 0], null, false, true, null]],
        106 => [[['_route' => 'app_historiquevente_show', '_controller' => 'App\\Controller\\HistoriqueventeController::show'], ['idvent'], ['GET' => 0], null, false, true, null]],
        127 => [[['_route' => 'app_historiquevente_edit', '_controller' => 'App\\Controller\\HistoriqueventeController::edit'], ['idvent'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        143 => [[['_route' => 'app_historiquevente_delete', '_controller' => 'App\\Controller\\HistoriqueventeController::delete'], ['idvent'], ['POST' => 0], null, false, true, null]],
        169 => [[['_route' => 'display_produit_list', '_controller' => 'App\\Controller\\ProduitController::listpdf'], ['id'], ['GET' => 0], null, false, true, null]],
        219 => [[['_route' => 'display_produit.pagination', 'page' => '1', 'nbre' => '3', '_controller' => 'App\\Controller\\ProduitController::pagination'], ['page', 'nbre'], null, null, false, true, null]],
        254 => [[['_route' => 'app_details', '_controller' => 'App\\Controller\\ProduitController::details'], ['idprod'], null, null, false, true, null]],
        270 => [[['_route' => 'app_like_produit', '_controller' => 'App\\Controller\\ProduitController::likeProduit'], ['idprod'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'app_dislike_offer', '_controller' => 'App\\Controller\\ProduitController::dislikeOffer'], ['idprod'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['idprod'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'modifprod', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        366 => [[['_route' => 'supp_prod', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        401 => [[['_route' => 'app_produitpm_edit', '_controller' => 'App\\Controller\\ProduitpmController::edit'], ['idprod'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        424 => [[['_route' => 'update', '_controller' => 'App\\Controller\\ProduitpmController::update'], ['id'], null, null, false, true, null]],
        447 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\ProduitpmController::delete'], ['idprod'], null, null, false, true, null]],
        461 => [[['_route' => 'stats', '_controller' => 'App\\Controller\\StatistiqueProduitController::statistique'], [], null, null, false, false, null]],
        500 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        520 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        539 => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], [], null, null, true, false, null]],
        577 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        591 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        611 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        624 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        634 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
