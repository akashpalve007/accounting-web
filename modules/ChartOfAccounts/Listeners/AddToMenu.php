<?php

namespace Modules\ChartOfAccounts\Listeners;

use App\Events\Menu\AdminCreated as Event;

class AddToMenu
{
    public function handle(Event $event): void
    {
        // Add child to existing menu item
        //$event->menu->route('chart-of-accounts.index', "Chart Of Accounts", [], 100, ['icon' => 'people']);
        $event->menu->add([
            'route' => ['chart-of-accounts.index', []],
            'title' => trans('Chart Of Accounts'),
            'icon' => 'money',
            'order' => 100,
        ]);
    }
}