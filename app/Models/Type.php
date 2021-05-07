<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Type
 * @package App\Models
 */
class Type extends Model
{
    /**
     * @var string
     */
    protected $table = 'types';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}
