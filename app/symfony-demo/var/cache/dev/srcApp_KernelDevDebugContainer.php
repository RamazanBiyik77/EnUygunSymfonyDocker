<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container9PYyPBd\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container9PYyPBd/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container9PYyPBd.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container9PYyPBd\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container9PYyPBd\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '9PYyPBd',
    'container.build_id' => '1c65400a',
    'container.build_time' => 1568486810,
], __DIR__.\DIRECTORY_SEPARATOR.'Container9PYyPBd');
