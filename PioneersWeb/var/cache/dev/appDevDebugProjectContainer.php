<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVdoigvn\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVdoigvn/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerVdoigvn.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerVdoigvn\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerVdoigvn\appDevDebugProjectContainer([
    'container.build_hash' => 'Vdoigvn',
    'container.build_id' => '307d5e30',
    'container.build_time' => 1587069505,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVdoigvn');
