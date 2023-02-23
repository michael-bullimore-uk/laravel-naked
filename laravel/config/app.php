<?php


use App\Foo\FooServiceProvider;

return [
    'providers' => [
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        // Features
        FooServiceProvider::class,
    ],
];
