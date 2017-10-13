let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */


/* Frontend */
mix.sass('resources/assets/frontend/sass/app.scss', 'public/css/freelancer.css')
   .sass('resources/assets/frontend/sass/bootstrap.scss', 'public/css/bootstrap.css')
   .sass('resources/assets/frontend/sass/google-fonts.scss', 'public/css/google-fonts.css');



mix.js(['resources/assets/frontend/js/app.js','resources/assets/frontend/js/freelancer/freelancer.js','resources/assets/frontend/js/freelancer/jqBootstrapValidation.js','resources/assets/frontend/js/freelancer/contact_me.js'], 'public/js/fullstackdeveloper.js');

mix.combine([
	'public/css/google-fonts.css',
    'public/css/bootstrap.css',
 	'public/css/freelancer.css'
], 'public/css/fullstackdeveloper.css').version();



/* End Frontend */



/* Admin */

mix.sass('resources/assets/admin/sass/bootstrap.scss', 'public/css/admin/global/plugins/bootstrap.css')
   .sass('resources/assets/admin/sass/select2-bootstrap.min.scss', 'public/css/admin/global/plugins/select2-bootstrap.css')
   .sass('resources/assets/admin/sass/global/components.scss', 'public/css/admin/global/components.css')
   .sass('resources/assets/admin/sass/global/components-rounded.scss', 'public/css/admin/global/components-rounded.css')
   .sass('resources/assets/admin/sass/global/components-md.scss', 'public/css/admin/global/components-md.css')
   .sass('resources/assets/admin/sass/global/plugins.scss', 'public/css/admin/global/plugins.css')
   .sass('resources/assets/admin/sass/global/plugins-md.scss', 'public/css/admin/global/plugins-md.css')
   .sass('resources/assets/admin/sass/apps/inbox.scss', 'public/css/admin/apps/inbox.css')
   .sass('resources/assets/admin/sass/apps/ticket.scss', 'public/css/admin/apps/ticket.css')
   .sass('resources/assets/admin/sass/apps/todo.scss', 'public/css/admin/apps/todo.css')
   .sass('resources/assets/admin/sass/apps/todo-2.scss', 'public/css/admin/apps/todo-2.css')
   .sass('resources/assets/admin/sass/pages/about.scss', 'public/css/admin/pages/about.css')
   .sass('resources/assets/admin/sass/pages/blog.scss', 'public/css/admin/pages/blog.css')
   .sass('resources/assets/admin/sass/pages/coming-soon.scss', 'public/css/admin/pages/coming-soon.css')
   .sass('resources/assets/admin/sass/pages/contact.scss', 'public/css/admin/pages/contact.css')
   .sass('resources/assets/admin/sass/pages/error.scss', 'public/css/admin/pages/error.css')
   .sass('resources/assets/admin/sass/pages/faq.scss', 'public/css/admin/pages/faq.css')
   .sass('resources/assets/admin/sass/pages/image-crop.scss', 'public/css/admin/pages/image-crop.css')
   .sass('resources/assets/admin/sass/pages/invoice-2.scss', 'public/css/admin/pages/invoice-2.css')
   .sass('resources/assets/admin/sass/pages/lock-2.scss', 'public/css/admin/pages/lock-2.css')
   .sass('resources/assets/admin/sass/pages/lock.scss', 'public/css/admin/pages/lock.css')
   .sass('resources/assets/admin/sass/pages/login-2.scss', 'public/css/admin/pages/login-2.css')
   .sass('resources/assets/admin/sass/pages/login-3.scss', 'public/css/admin/pages/login-3.css')
   .sass('resources/assets/admin/sass/pages/login-4.scss', 'public/css/admin/pages/login-4.css')
   .sass('resources/assets/admin/sass/pages/pricing.scss', 'public/css/admin/pages/pricing.css')
   .sass('resources/assets/admin/sass/pages/profile-2.scss', 'public/css/admin/pages/profile-2.css')
   .sass('resources/assets/admin/sass/pages/profile.scss', 'public/css/admin/pages/profile.css')
   .sass('resources/assets/admin/sass/pages/search.scss', 'public/css/admin/pages/search.css')
   .sass('resources/assets/admin/sass/pages/tasks.scss', 'public/css/admin/pages/tasks.css')
   .sass('resources/assets/admin/sass/layouts/layout/layout.scss', 'public/css/admin/layouts/layout/layout.css')
   .sass('resources/assets/admin/sass/layouts/layout/custom.scss', 'public/css/admin/layouts/layout/custom.css')
   .sass('resources/assets/admin/sass/layouts/layout/themes/blue.scss', 'public/css/admin/layouts/layout/themes/blue.css')
   .sass('resources/assets/admin/sass/layouts/layout/themes/darkblue.scss', 'public/css/admin/layouts/layout/themes/darkblue.css')
   .sass('resources/assets/admin/sass/layouts/layout/themes/default.scss', 'public/css/admin/layouts/layout/themes/default.css')
   .sass('resources/assets/admin/sass/layouts/layout/themes/light.scss', 'public/css/admin/layouts/layout/themes/light.css')
   .sass('resources/assets/admin/sass/layouts/layout/themes/light2.scss', 'public/css/admin/layouts/layout/themes/light2.css')
;


mix.combine([
    'public/css/admin/global/plugins/bootstrap.css',
    'public/css/admin/global/plugins/select2-bootstrap.css',
	'public/css/admin/global/components.css',
	'public/css/admin/global/components-rounded.css',
	'public/css/admin/global/components-md.css',
	'public/css/admin/global/plugins.css',
	'public/css/admin/global/plugins-md.css',
	'public/css/admin/apps/inbox.css',
	'public/css/admin/apps/ticket.css',
	'public/css/admin/apps/todo.css',
	'public/css/admin/apps/todo-2.css',
	'public/css/admin/layouts/layout/layout.css',
	'public/css/admin/layouts/layout/custom.css',
	'public/css/admin/layouts/layout/themes/blue.css',
], 'public/css/admin/app-layout-blue.css');


/* End Admin */
