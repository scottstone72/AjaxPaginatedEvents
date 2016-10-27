<?php namespace ScottJohnstone\AjaxPaginatedEvents;

use Backend;
use System\Classes\PluginBase;

/**
 * ECalendar Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'AjaxPaginatedEvents',
            'description' => 'Ajax powered paginated event listings',
            'author'      => 'ScottJohnstone',
            'icon'        => 'icon-calendar'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'ScottJohnstone\AjaxPaginatedEvents\Components\SingleEvent' => 'event',
            'ScottJohnstone\AjaxPaginatedEvents\Components\EventList' => 'eventList',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {

        return [];

        return [
            'scottjohnstone.ajaxpaginatedevents.some_permission' => [
                'tab' => 'AjaxPaginatedEvents',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'events' => [
                'label'       => 'Events',
                'url'         => Backend::url('scottjohnstone/ajaxpaginatedevents/events'),
                'icon'        => 'icon-calendar',
                'permissions' => ['scottjohnstone.ajaxpaginatedevents.*'],
                'order'       => 500,
            ],
        ];
    }

}
