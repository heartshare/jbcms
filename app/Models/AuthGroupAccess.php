<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * Class AuthGroupAccess
 * @package App\Models
 */
class AuthGroupAccess extends Pivot
{
    /**
     * @var string
     */
    protected $table = 'auth_group_access';
}
