<?php namespace ScottJohnstone\AjaxPaginatedEvents\Components;

use Cms\Classes\ComponentBase;
use ScottJohnstone\AjaxPaginatedEvents\Models\Event;


class SingleEvent extends ComponentBase
{

    public $event;

    public function componentDetails()
    {
        return [
            'name'        => 'Single Event',
            'description' => 'Display\'s a single event on a page'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
//      $this->event = Event::find();
    }

}