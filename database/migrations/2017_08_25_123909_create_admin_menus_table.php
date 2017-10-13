<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_menus', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title',120);
			$table->string('icon',120);
			$table->string('route',120)->nullable()->default(null);
			$table->integer('parentID')->default('0');
            $table->timestamps();
			$table->unique(['id', 'parentID']);	
        });
	 	DB::table('admin_menus')->insert([
    ['id' => '1', 'title' => 'General', 'icon' => 'home', 'route' => NULL, 'parentID' => '0'],
    ['id' => '2', 'title' => 'Setting', 'icon' => 'settings', 'route' => 'adminSetting', 'parentID' => '1'],
    ['id' => '3', 'title' => 'Portfollio', 'icon' => 'folder', 'route' => NULL, 'parentID' =>'0'],
    ['id' => '4', 'title' => 'Projects', 'icon' => 'list', 'route' => 'project', 'parentID' => '3'],
    ['id' => '5', 'title' => 'New Project', 'icon' => 'plus', 'route' => 'project.create', 'parentID' => '3'],
    ['id' => '6', 'title' => 'Categories', 'icon' => 'list', 'route' => 'project.category', 'parentID' => '3'],
    ['id' => '7', 'title' => 'New  Category', 'icon' => 'plus', 'route' => 'project.category.create', 'parentID' => '3'],
    ['id' => '8', 'title' => 'Clients', 'icon' => 'list', 'route' => 'project.client', 'parentID' => '3'],
    ['id' => '9', 'title' => 'New Client', 'icon' => 'plus', 'route' => 'project.client.create', 'parentID' => '3'],
    ['id' => '10', 'title' => 'Users', 'icon' => 'user', 'route' => NULL, 'parentID' =>'0'],
	['id' => '11', 'title' => 'Users', 'icon' => 'list', 'route' => 'user', 'parentID' =>'10'],
	['id' => '12', 'title' => 'New User', 'icon' => 'plus', 'route' => 'user.create', 'parentID' =>'10'],
    ['id' => '13', 'title' => 'Messages', 'icon' => 'envelope', 'route' => NULL, 'parentID' =>'0'],
	['id' => '14', 'title' => 'Messages', 'icon' => 'list', 'route' => 'message', 'parentID' =>'13'],

		]);
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_menus');
    }
}
