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
 * Class GetMaturityLevelConsole
 * @package Bitnetic\Maturity\Console
 */
class GetMaturityLevelConsole extends Command
{
    /**
     * @var string
     */
    protected $signature = 'maturity:get';

    /**
     * @var string
     */
    protected $description = 'Prints the current maturity level';

    public function handle()
    {
        $this->info(Maturity::getLevel());
    }
}
