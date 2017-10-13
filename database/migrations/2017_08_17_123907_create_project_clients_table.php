<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_clients', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name',120);
            $table->timestamps();
        });
	 	DB::table('project_clients')->insert([
    ['id' => '1', 'name' => 'Atlas Furniture'],
	['id' => '2', 'name' => 'Adama Group'],
	['id' => '3', 'name' => 'Alnoor Group'],
	['id' => '4', 'name' => 'Almaaly Group'],
	['id' => '5', 'name' => 'Mr. Ali'],
	['id' => '6', 'name' => 'Kazaaz Promotion Services']
		]);
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_clients');
    }
}
