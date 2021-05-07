<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ad
 * @package App\Models
 */
class Ad extends Model
{
    /**
     * @var string
     */
    protected $table = 'ads';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}
