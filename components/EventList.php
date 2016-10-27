<?php namespace ScottJohnstone\AjaxPaginatedEvents\Components;

use Cms\Classes\ComponentBase;
use ScottJohnstone\AjaxPaginatedEvents\Models\Event;
use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Log;


class EventList extends ComponentBase
{

	public $events;

	public function componentDetails()
	{
		return [
		  'name' => 'EventList',
		  'description' => 'Adds a list of events to a page'
		];
	}

	public function defineProperties()
	{
		return [
		  'pagination' => [
			'title' => 'Pagination',
			'type' => 'string',
			'default' => 5,
			'placeholder' => 'Number of Results',
		  ]
		];
	}

	public function onRun()
	{
		$this->addCss('assets/css/style.css');
		$this->onSelectNextPage();
//		return $this->renderPartial('event.htm');
	}

	public function onSelectNextPage()
	{
		$date = Carbon::now();
		// Get Collection
		$eventCollection = Event::orderBy('date', 'DESC')
		  ->where('is_published', true)
		  ->where('date', '>=', $date)->get();

		$per_page = $this->property('pagination');
		$current_page = (int)post('page') ?: 1;

		//Slice the collection to get the items to display in current page
		$currentPageResults = $eventCollection->slice(($current_page - 1) * $per_page, $per_page);

		$this->events = new LengthAwarePaginator($currentPageResults, count($eventCollection), $per_page, $current_page);
		$this->ss($this->events);
	}

	public function ss($events)
	{
		Log::info('<pre>' . var_export($events, true) . '</pre>');
	}

}