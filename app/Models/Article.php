<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{
    /**
     * @var string
     */
    protected $table = 'articles';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
}
