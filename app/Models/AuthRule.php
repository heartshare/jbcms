<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthRule
 * @package App\Models
 */
class AuthRule extends Model
{
    /**
     * @var string
     */
    protected $table = 'auth_rules';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}
