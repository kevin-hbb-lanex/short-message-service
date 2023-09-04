<?php
 
 namespace KevinHbbLanex\ShortMessageService;
 
use Illuminate\Support\ServiceProvider;
 
class SMSServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/courier.php', 'courier'
        );
    }
}