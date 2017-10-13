<?php

// Home
Breadcrumbs::register('home', function ($breadcrumbs) {
    $breadcrumbs->push('Home', route('frontend.home'));
});


// Home > Portfollio
Breadcrumbs::register('portfolio', function ($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Portfolio', route('frontend.portfolio'));
});
