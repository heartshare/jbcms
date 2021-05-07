<?php

namespace App\Services;

use App\Models\Log;

/**
 * Class LogService
 * @package app\service
 */
class LogService
{
    /**
     * @var Log
     */
    private Log $log;

    /**
     * LogService constructor.
     * @param Log $log
     */
    public function __construct(Log $log)
    {
        $this->log = $log;
    }
}
