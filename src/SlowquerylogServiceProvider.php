<?php

namespace salvatorecervone\Slowquerylog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use salvatorecervone\Slowquerylog\Commands\SlowquerylogCommand;

class SlowquerylogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('slowquerylog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_slowquerylog_table')
            ->hasCommand(SlowquerylogCommand::class);
    }
}
