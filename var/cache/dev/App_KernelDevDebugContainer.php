<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEtcc8c6\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEtcc8c6/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerEtcc8c6.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerEtcc8c6\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerEtcc8c6\App_KernelDevDebugContainer([
    'container.build_hash' => 'Etcc8c6',
    'container.build_id' => 'f81d7434',
    'container.build_time' => 1648662446,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEtcc8c6');
