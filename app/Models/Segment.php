<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Segment
 * @package App\Models
 */
class Segment extends Model
{
    /**
     * @var string
     */
    protected $table = 'segments';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}
