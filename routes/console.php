<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('about-school', function () {
    $this->info('SMK Negeri 1 Cijati - Website Sekolah');
})->purpose('Show school website information');
