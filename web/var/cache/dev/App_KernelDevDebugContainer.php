<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDxhjMw1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDxhjMw1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDxhjMw1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDxhjMw1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDxhjMw1\App_KernelDevDebugContainer([
    'container.build_hash' => 'DxhjMw1',
    'container.build_id' => 'aaa81df1',
    'container.build_time' => 1653905188,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDxhjMw1');
