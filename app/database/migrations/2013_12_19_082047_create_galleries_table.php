<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGalleriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('galleries', function(Blueprint $table) {
            $table->increments('id');
            $table->boolean('active')->default(true);

            $table->timestamps();
        });

        Schema::create('images', function(Blueprint $table) {
            $table->increments('id');
            $table->boolean('active')->default(true);

            $table->integer('imageable_id');
            $table->string('imageable_type');

            $table->text('name');
            $table->boolean('root');
            $table->integer('gallery_id')->unsigned();


            $table->timestamps();

            $table->foreign('gallery_id')->references('id')->on('galleries');

        });

        Schema::create('occupations', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->longtext('description');
            $table->boolean('active')->default(0);
            $table->integer('parent')->default(0);
            $table->integer('position')->default(10);

            $table->integer('gallery_id')->unsigned();

            $table->timestamps();

            $table->foreign('gallery_id')->references('id')->on('galleries');
        });


        Schema::create('partners', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->longtext('description');
            $table->boolean('active')->default(0);

            $table->integer('gallery_id')->unsigned();

            $table->timestamps();

            $table->foreign('gallery_id')->references('id')->on('galleries');
        });

        Schema::create('banners', function(Blueprint $table) {

            $table->increments('id');

            $table->text('title');

            $table->text('description');

            $table->boolean('active')->default(0);

            //$table->integer('image_root');

            $table->integer('gallery_id')->unsigned();

            $table->timestamps();

            //$table->foreign('image_root')->references('id')->on('images');

            $table->foreign('gallery_id')->references('id')->on('galleries');

        });

        Schema::create('works', function(Blueprint $table) {

            $table->increments('id');

            $table->text('name');

            $table->text('description');

            $table->boolean('active')->default(0);

            $table->text('lat');

            $table->text('lng');

            $table->integer('gallery_id')->unsigned();

            $table->timestamps();

            $table->foreign('gallery_id')->references('id')->on('galleries');

        });

	}

	public function down()
	{
        Schema::drop('works');
        Schema::drop('banners');
        Schema::drop('partners');
        Schema::drop('occupations');
        Schema::drop('images');
        Schema::drop('galleries');
    }

}