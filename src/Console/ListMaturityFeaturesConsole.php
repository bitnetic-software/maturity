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
 * Class ListMaturityFeaturesConsole
 * @package Bitnetic\Maturity\Console
 */
class ListMaturityFeaturesConsole extends Command
{
    /**
     * @var string
     */
    protected $signature = 'maturity:list {level?}';

    /**
     * @var string
     */
    protected $description = 'List the current maturity level\'s features';

    public function handle()
    {
        $features = Maturity::getFeatures($this->argument('level'));
        foreach ($features as $key => $value) {
            if (is_numeric($key)) {
                $this->info((string) $value . ': true');
            } else {
                if ($value === false) {
                    $this->error($key . ': false');
                } else {
                    $this->info($key . ': true');
                }
            }
        }
    }
}
