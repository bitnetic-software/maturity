<?php
/**
 * Created by IntelliJ IDEA.
 * User: nudge
 * Date: 15.04.18
 * Time: 13:25
 */

namespace Bitnetic\Maturity\Console;

use Bitnetic\Maturity\Maturity;
use Illuminate\Console\Command;

/**
 * Class HasMaturityFeature
 * @package Bitnetic\Maturity\Console
 */
class HasMaturityFeatureConsole extends Command
{
    /**
     * @var string
     */
    protected $signature = 'maturity:has {feature}';

    /**
     * @var string
     */
    protected $description = 'Show the current maturity level\'s feature setting';

    public function handle()
    {
        $setting = Maturity::get($this->argument('feature'));
        $this->info($setting === false ? 'false' : ($setting === true ? 'true' : $setting));
    }
}
