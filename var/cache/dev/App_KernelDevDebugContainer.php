<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJPK5Q9E\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJPK5Q9E/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJPK5Q9E.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJPK5Q9E\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJPK5Q9E\App_KernelDevDebugContainer([
    'container.build_hash' => 'JPK5Q9E',
    'container.build_id' => 'dc46610b',
    'container.build_time' => 1642495571,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJPK5Q9E');
