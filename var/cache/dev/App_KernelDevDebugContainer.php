<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMsRGvfJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMsRGvfJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMsRGvfJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMsRGvfJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMsRGvfJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'MsRGvfJ',
    'container.build_id' => '78a7bf77',
    'container.build_time' => 1587557055,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMsRGvfJ');