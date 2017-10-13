<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create setting table
		Schema::create('settings',function(Blueprint $table){
			
			$table->increments('id');
			$table->string('setting_name',100)->unique();
			$table->longText('setting_value')->nullable()->default(null);	
			$table->timestamps();	
		});
		
		DB::table('settings')->insert([
    ['setting_name' => 'website_title', 'setting_value' => 'Full Stack Developer'],
	['setting_name' => 'website_desc', 'setting_value' => 'Full Stack Developer (Web Developer - Digital Marketing Consultant - User Experience Designer)'],
	['setting_name' => 'your_name', 'setting_value' => 'Mohamed Al-Moelef'],
    ['setting_name' => 'your_photo', 'setting_value' => 'settings/images/myprofile.png'],
	['setting_name' => 'your_email', 'setting_value' => 'info@marketing.limited'],
	['setting_name' => 'website_message_contact', 'setting_value' => 'Thank you!<br>Your message has been successfully sent. We will contact you very soon! '],
    ['setting_name' => 'your_skills_short', 'setting_value' => 'Web Developer - Digital Marketing Consultant - User Experience Designer'],
 	['setting_name' => 'about_you_column_one', 'setting_value' => 'Senior Full Stack Developer specializing in back-end and front end development with 12+ years experience. Experienced with all stages of the development cycle for RIA (web) projects. Well-versed in PHP / LARAVEL for back-end and HTML5 / CSS3 / CSS pre-processors (SASS/LESS) / JAVASCRIPT / VUE.JS / JQUERY / BOOTSTRAP for front-end.'],
    ['setting_name' => 'about_you_column_two', 'setting_value' => "Furthermore, Experienced with Restful API / UX-UI design / Version and Source Control (GIT) / AJAX / JSON / Adobe Creative Suite (Photoshop, After Effects)"],
    ['setting_name' => 'your_location', 'setting_value' => "Manama<br>Kingdom of Bahrain"],
    ['setting_name' => 'custom_footer_title', 'setting_value' => "My Objective"],
    ['setting_name' => 'custom_footer_desc', 'setting_value' => 'Creating a complete digital marketing cloud.'],
	['setting_name' => 'website_copyright', 'setting_value' => '<a href="fullstackdeveloper.org">Full Stack Developer 2017</a>'],
	['setting_name' => 'your_facebook', 'setting_value' => 'https://www.facebook.com/'],
	['setting_name' => 'your_twitter', 'setting_value' => 'https://twitter.com/'],
	['setting_name' => 'your_linkedin', 'setting_value' => 'https://www.linkedin.com/in/mohamed-almoelef/'],
	['setting_name' => 'your_google_plus', 'setting_value' => 'https://plus.google.com/'],
	['setting_name' => 'your_instagram', 'setting_value' => 'https://www.instagram.com/'],
	['setting_name' => 'your_dribbble', 'setting_value' => 'https://dribbble.com/']

]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
