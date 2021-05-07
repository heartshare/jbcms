<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Content
 * @package App\Models
 */
class Content extends Model
{
    /**
     * @var string
     */
    protected $table = 'contents';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}
