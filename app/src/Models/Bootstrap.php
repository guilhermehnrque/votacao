<?php 

namespace App\Models;

use App\Application\Settings\SettingsInterface;
use Illuminate\Database\Capsule\Manager as Capsule;

final class Bootstrap
{
    public static function load($container)
    {
        $settings = $container->get(SettingsInterface::class);
        $capsule = new Capsule();
        $capsule->addConnection($settings->get('db'));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();                
    }
}