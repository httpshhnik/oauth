<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNhnqxx4\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNhnqxx4/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerNhnqxx4.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerNhnqxx4\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerNhnqxx4\appProdProjectContainer(array(
    'container.build_hash' => 'Nhnqxx4',
    'container.build_id' => 'ae611268',
    'container.build_time' => 1548773418,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerNhnqxx4');
