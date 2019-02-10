<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_items', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('item_id');
            $table->string('menu_name');
            $table->string('item_name');
            $table->string('logo');
            $table->string('caption');
            $table->string('sub_caption');
            $table->string('short_description');
            $table->string('long_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_items');
    }
}
