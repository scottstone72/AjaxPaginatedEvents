<?php namespace ScottJohnstone\AjaxPaginatedEvents\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Event Model
 */
class Event extends Model
{

	use Validation;

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'scottjohnstone_ajaxpaginated_events';

	/**
	 * @var array Guarded fields
	 */
	protected $guarded = ['*'];

	/**
	 * @var array Validation
	 */
	protected $rules = [
	  'name' => 'required',
	  'date' => 'required',

	];

	/**
	 * @var array Fillable fields
	 */
	protected $fillable = [
	  'name',
	  'slug',
	  'link',
	  'location',
	  'date',
	  'all_ady',
	  'start',
	  'end',
	  'description',
	  'is_published'
	];


	public $attachOne = [
		'image' => ['System\Models\File']
	];

}