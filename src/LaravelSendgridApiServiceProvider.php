<?php

namespace Afatmustafa\LaravelSendgridApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Afatmustafa\LaravelSendgridApi\Commands\LaravelSendgridApiCommand;

class LaravelSendgridApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-sendgrid-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-sendgrid-api_table')
            ->hasCommand(LaravelSendgridApiCommand::class);
    }
}
