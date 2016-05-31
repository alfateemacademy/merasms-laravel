<?php

$categories = Category::with('sms')->take(5)->orderBy('created_at', 'desc')->get();
View::share('categories', $categories);

$mostViewedSms = Sms::take(5)->orderBy('views', 'DESC')->get();
View::share('mostViewedSms', $mostViewedSms);

