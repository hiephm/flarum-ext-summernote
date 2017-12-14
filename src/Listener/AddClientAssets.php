<?php

namespace Hiephm\Summernote\Listener;

use Illuminate\Contracts\Events\Dispatcher;
use Flarum\Event\ConfigureWebApp;

class AddClientAssets
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureWebApp::class, [$this, 'addAssets']);
    }

    public function addAssets(ConfigureWebApp $event)
    {
        if ($event->isForum()) {
            $event->addAssets([
                __DIR__ . '/../../js/forum/dist/extension.js',
//                __DIR__ . '/../../less/quill.snow.less',
//                __DIR__ . '/../../less/custom.less'
            ]);
            $event->addBootstrapper('hiephm/flarum-ext-summernote/main');
        }
    }
}