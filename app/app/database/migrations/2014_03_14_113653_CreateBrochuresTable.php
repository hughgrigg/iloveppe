<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrochuresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
                Schema::create('brochures', function(Blueprint $table) {
                    $table->increments('id');
                    
                    $table->integer('company_id');
                    
                    $table->string('folder', 10);
                    $table->string('cover_image_path', 255);
                    
                    $table->softDeletes();
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
		Schema::dropIfExists('brochures');
	}

}
