<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWXAJ4En\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWXAJ4En/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWXAJ4En.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWXAJ4En\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWXAJ4En\App_KernelDevDebugContainer([
    'container.build_hash' => 'WXAJ4En',
    'container.build_id' => '5047839f',
    'container.build_time' => 1635697109,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWXAJ4En');
