<?php
/**
* Created by Claudio Campos.
* User: callcocam@gmail.com, contato@sigasmart.com.br
* https://www.sigasmart.com.br
*/
namespace Tall\Schema;

use Illuminate\Support\ServiceProvider;
use Tall\Schema\DBAL\MySQLSchema  as DBALMySQLSchema;

class SluggableSeviceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/sluggable.php','sluggable'
        );
        $this->publishes([
            __DIR__.'/../config/sluggable.php' => config_path('sluggable.php'),
        ], 'sluggable');
    }
}
