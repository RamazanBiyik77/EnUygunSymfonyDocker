<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'admin_index' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/post/'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_post_index' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\BlogController::index', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/post/'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_post_new' => [['_locale'], ['_controller' => 'App\\Controller\\Admin\\BlogController::new', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/admin/post/new'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_post_show' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::show', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/post'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_post_edit' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::edit', '_locale' => 'en'], ['id' => '\\d+', '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/edit'], ['variable', '/', '\\d+', 'id', true], ['text', '/admin/post'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'admin_post_delete' => [['_locale', 'id'], ['_controller' => 'App\\Controller\\Admin\\BlogController::delete', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/delete'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/post'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'blog_index' => [['_locale'], ['page' => '1', '_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/blog/'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'blog_rss' => [['_locale'], ['page' => '1', '_format' => 'xml', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/blog/rss.xml'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'blog_index_paginated' => [['_locale', 'page'], ['_format' => 'html', '_controller' => 'App\\Controller\\BlogController::index', '_locale' => 'en'], ['page' => '[1-9]\\d*', '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '[1-9]\\d*', 'page', true], ['text', '/blog/page'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'blog_post' => [['_locale', 'slug'], ['_controller' => 'App\\Controller\\BlogController::postShow', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', '[^/]++', 'slug', true], ['text', '/blog/posts'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'comment_new' => [['_locale', 'postSlug'], ['_controller' => 'App\\Controller\\BlogController::commentNew', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/new'], ['variable', '/', '[^/]++', 'postSlug', true], ['text', '/blog/comment'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'blog_search' => [['_locale'], ['_controller' => 'App\\Controller\\BlogController::search', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/blog/search'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'security_login' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::login', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/login'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'security_logout' => [['_locale'], ['_controller' => 'App\\Controller\\SecurityController::logout', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/logout'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'user_edit' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::edit', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/profile/edit'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    'user_change_password' => [['_locale'], ['_controller' => 'App\\Controller\\UserController::changePassword', '_locale' => 'en'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['text', '/profile/change-password'], ['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'homepage' => [['_locale'], ['template' => 'default/homepage.html.twig', '_locale' => 'en', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction'], ['_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt'], [['variable', '/', 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr|zh_CN|bg|tr|lt', '_locale', true]], [], []],
];
