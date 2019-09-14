<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'services_resetter' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/DependencyInjection/ServicesResetter.php';

return $this->services['services_resetter'] = new \Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter(new RewindableGenerator(function () {
    if (isset($this->privates['form.choice_list_factory.cached'])) {
        yield 'form.choice_list_factory.cached' => ($this->privates['form.choice_list_factory.cached'] ?? null);
    }
    if (isset($this->services['profiler'])) {
        yield 'profiler' => ($this->services['profiler'] ?? null);
    }
    if (isset($this->services['validator'])) {
        yield 'debug.validator' => ($this->services['validator'] ?? null);
    }
    if (isset($this->privates['debug.stopwatch'])) {
        yield 'debug.stopwatch' => ($this->privates['debug.stopwatch'] ?? null);
    }
    if (isset($this->services['security.token_storage'])) {
        yield 'security.token_storage' => ($this->services['security.token_storage'] ?? null);
    }
    if (isset($this->privates['form.type.entity'])) {
        yield 'form.type.entity' => ($this->privates['form.type.entity'] ?? null);
    }
    if (isset($this->privates['monolog.handler.main'])) {
        yield 'monolog.handler.main' => ($this->privates['monolog.handler.main'] ?? null);
    }
    if (isset($this->privates['monolog.handler.console'])) {
        yield 'monolog.handler.console' => ($this->privates['monolog.handler.console'] ?? null);
    }
    if (isset($this->privates['swiftmailer.email_sender.listener'])) {
        yield 'swiftmailer.email_sender.listener' => ($this->privates['swiftmailer.email_sender.listener'] ?? null);
    }
    if (isset($this->privates['webpack_encore.tag_renderer'])) {
        yield 'webpack_encore.tag_renderer' => ($this->privates['webpack_encore.tag_renderer'] ?? null);
    }
    if (isset($this->privates['webpack_encore.entrypoint_lookup[_default]'])) {
        yield 'webpack_encore.entrypoint_lookup[_default]' => ($this->privates['webpack_encore.entrypoint_lookup[_default]'] ?? null);
    }
}, function () {
    return 0 + (int) (isset($this->privates['form.choice_list_factory.cached'])) + (int) (isset($this->services['profiler'])) + (int) (isset($this->services['validator'])) + (int) (isset($this->privates['debug.stopwatch'])) + (int) (isset($this->services['security.token_storage'])) + (int) (isset($this->privates['form.type.entity'])) + (int) (isset($this->privates['monolog.handler.main'])) + (int) (isset($this->privates['monolog.handler.console'])) + (int) (isset($this->privates['swiftmailer.email_sender.listener'])) + (int) (isset($this->privates['webpack_encore.tag_renderer'])) + (int) (isset($this->privates['webpack_encore.entrypoint_lookup[_default]']));
}), ['form.choice_list_factory.cached' => 'reset', 'profiler' => 'reset', 'debug.validator' => 'reset', 'debug.stopwatch' => 'reset', 'security.token_storage' => 'setToken', 'form.type.entity' => 'reset', 'monolog.handler.main' => 'reset', 'monolog.handler.console' => 'reset', 'swiftmailer.email_sender.listener' => 'reset', 'webpack_encore.tag_renderer' => 'reset', 'webpack_encore.entrypoint_lookup[_default]' => 'reset']);