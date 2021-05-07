<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Stat
 * @package App\Models
 */
class Stat extends Model
{
    /**
     * @var string
     */
    protected $table = 'stats';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}
