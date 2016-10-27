<?php namespace ScottJohnstone\AjaxPaginatedEvents\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{
  public function up() {
    Schema::create('scottjohnstone_ajaxpaginated_events', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('name');
      $table->string('slug');
      $table->string('link')->nullable();
      $table->string('location')->nullable();
      $table->date('date');
      $table->time('start')->nullable();
      $table->time('end')->nullable();
      $table->text('description')->nullable();
      $table->boolean('is_published')->nullable()->default(FALSE);
      $table->timestamps();
    });
  }

  public function down() {
    Schema::dropIfExists('scottjohnstone_ajaxpaginated_events');
  }
}
