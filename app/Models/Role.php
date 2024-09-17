<?php

namespace App\Models;


class Role extends \Spatie\Permission\Models\Role
{

    public $incrementing = false;

    protected $fillable = [
        'name',
        'guard_name',
        'is_hidden'
    ];

    // Roles
    const ADMIN         = 'Admin';
    const STORE         = 'Store';

    public static $hidden_roles = [self::ADMIN, self::STORE];

}
