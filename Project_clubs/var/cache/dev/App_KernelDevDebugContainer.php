<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCcxZ6m7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCcxZ6m7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCcxZ6m7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCcxZ6m7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCcxZ6m7\App_KernelDevDebugContainer([
    'container.build_hash' => 'CcxZ6m7',
    'container.build_id' => 'de4fa8bd',
    'container.build_time' => 1729717667,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCcxZ6m7');
