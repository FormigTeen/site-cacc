<?php

use TightenCo\Jigsaw\Jigsaw;

setlocale (LC_ALL, 'pt_BR');

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */

/**
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */
\App\Listeners\AddCategoryPages::register($container);

$events->afterCollections(function ($jigsaw) use ($container) {
    $container->make(\App\Listeners\AddCategoryPages::class)->handle($jigsaw);
});

