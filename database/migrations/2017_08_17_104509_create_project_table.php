<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',120);
			$table->longText('description');
			$table->date('release_date');
			$table->integer('project_clients_id');
			$table->integer('project_categories_id');
			$table->string('image',120);
			$table->string('url',120);
            $table->timestamps();
        });
		 
		DB::table('projects')->insert([
    ['id' => '1', 'title' => 'Atlas Furniture Website', 'description' => 'Technologies used in this project: Wordpress, css3, javascript, html5 php','release_date' => '2014-01-13', 'project_clients_id' => '1', 'project_categories_id' => '1', 'image' => 'project/images/AtlasFurnitureWebsite.jpg','url' => 'http://atlas-bh.com'],
    ['id' => '2', 'title' => 'Adama Pharmacy E-Commerce Website', 'description' => 'Technologies used in this project: cs-cart, css3, javascript, html5 php','release_date' => '2016-06-23', 'project_clients_id' => '2', 'project_categories_id' => '2', 'image' => 'project/images/AdamaPharmacy.jpg','url' => 'http://adamapharmacy.com'],
    ['id' => '3', 'title' => 'Almaaly Website', 'description' => 'Technologies used in this project: Wordpress, css3, javascript, html5 php','release_date' => '2016-03-05', 'project_clients_id' => '4', 'project_categories_id' => '1', 'image' => 'project/images/Almaaly.jpg','url' => 'http://almaalybh.com'],
	 ['id' => '4', 'title' => 'Scoopline Website', 'description' => 'Technologies used in this project: Wordpress, css3, javascript, html5 php','release_date' => '2017-07-11', 'project_clients_id' => '3', 'project_categories_id' => '1', 'image' => 'project/images/ScoopLine.jpg','url' => 'http://scooplinebh.com'],
	 ['id' => '5', 'title' => 'Gopsh E-Commerce Website', 'description' => 'Technologies used in this project: cs-cart, css3, javascript, html5 php','release_date' => '2017-07-09', 'project_clients_id' => '5', 'project_categories_id' => '2', 'image' => 'project/images/Gopsh.jpg','url' => 'https://gopsh.com/'],
	['id' => '6', 'title' => 'Marketing Limited Website', 'description' => 'Technologies used in this project: Wordpress, css3, javascript, html5 php','release_date' => '2017-01-02', 'project_clients_id' => '6', 'project_categories_id' => '1', 'image' => 'project/images/MarketingLimited.jpg','url' => 'https://marketing.limited'],
	['id' => '7', 'title' => 'Doctors Search Engine', 'description' => 'Technologies used in this project: PHP, MySql, css3, javascript, html5 php','release_date' => '2013-05-02', 'project_clients_id' => '6', 'project_categories_id' => '1', 'image' => 'project/images/FindDoctors.jpg','url' => 'https://projects.fullstackdeveloper.org/finddoctor/']
		]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
