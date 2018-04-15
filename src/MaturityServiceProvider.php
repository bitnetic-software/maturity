<?php
/**
 * Created by IntelliJ IDEA.
 * User: nudge
 * Date: 17.01.18
 * Time: 16:51
 */

namespace Bitnetic\Maturity;

use Bitnetic\Maturity\Console\GetMaturityLevelConsole;
use Bitnetic\Maturity\Console\HasMaturityFeatureConsole;
use Bitnetic\Maturity\Console\ListMaturityFeaturesConsole;
use Illuminate\Support\ServiceProvider;

/**
 * Class MaturityServiceProvider
 * @package Bitnetic\Maturity
 */
class MaturityServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/maturity.php' => config_path('maturity.php'),
        ], 'config');
    }

    public function register()
    {
        $this->commands(GetMaturityLevelConsole::class);
        $this->commands(HasMaturityFeatureConsole::class);
        $this->commands(ListMaturityFeaturesConsole::class);
    }
}
