<?php

namespace Modules\Payroll\Listeners;

use App\Events\Menu\AdminCreated as Event;

class AddToMenu
{
    public function handle(Event $event): void
    {
        // Add child to existing menu item
        //$event->menu->route('payroll.index', "Payroll", [], 100, ['icon' => 'money']);
        $event->menu->add([
            'route' => ['payroll.index', []],
            'title' => trans('Payroll'),
            'icon' => 'money',
            'order' => 100,
        ]);

    }
}