<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEroP2Px\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEroP2Px/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEroP2Px.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEroP2Px\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEroP2Px\App_KernelDevDebugContainer([
    'container.build_hash' => 'EroP2Px',
    'container.build_id' => 'a52b9d0d',
    'container.build_time' => 1587627954,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEroP2Px');
