<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYCW4V8x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYCW4V8x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYCW4V8x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYCW4V8x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYCW4V8x\App_KernelDevDebugContainer([
    'container.build_hash' => 'YCW4V8x',
    'container.build_id' => 'ecd982f0',
    'container.build_time' => 1647342087,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYCW4V8x');
