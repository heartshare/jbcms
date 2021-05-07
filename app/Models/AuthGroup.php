<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class AuthGroup
 * @package App\Models
 */
class AuthGroup extends Model
{
    /**
     * @var string
     */
    protected $table = 'auth_groups';

    /**
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @return BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, AuthGroupAccess::class);
    }
}
