<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSrt4jdw\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSrt4jdw/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSrt4jdw.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSrt4jdw\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerSrt4jdw\appDevDebugProjectContainer([
    'container.build_hash' => 'Srt4jdw',
    'container.build_id' => '6b9b88c0',
    'container.build_time' => 1586376145,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSrt4jdw');
