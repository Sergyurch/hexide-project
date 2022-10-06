<?php

namespace App\Providers;

use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(BuildingMenu::class, function (BuildingMenu $event) {

            $event->menu->add([
                'text'        => 'users_key',
                'url'         => 'admin/users',
                'icon'        => 'far fa-fw fa-user',
                'label'       => User::all()->count(),
                'label_color' => 'success',
            ]);

            $event->menu->add([
                'text'        => 'orders_key',
                'url'         => 'admin/orders',
                'icon'        => 'fa fa-shopping-cart',
                'label'       => Order::all()->count(),
                'label_color' => 'success',
            ]);

            $event->menu->add([
                'text'        => 'items_key',
                'url'         => 'admin/items',
                'icon'        => 'fa fa-database',
                'label'       => Item::all()->count(),
                'label_color' => 'success',
            ]);
        
            $event->menu->addAfter('fullscreen_widget', [
                'key' => 'locale_settings',
                'text' => strtoupper(trans('menu.set_locale')),
                'route' => ['locale', ['locale' => trans('menu.set_locale')]],
                'topnav_right' => true,
            ]);
            
        });
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
