<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'type'
    ];

    public static $appStatuses = [
        [
            'name' => 'Active Store',
            'type' => 'ST',
        ],
        [
            'name' => 'Waiting for Approval',
            'type' => 'ST',
        ],
        [
            'name' => 'Hold',
            'type' => 'ST',
        ],
        [
            'name' => 'In Active Store',
            'type' => 'ST',
        ],
        [
            'name' => 'Active Partner',
            'type' => 'DP',
        ],
        [
            'name' => 'Waiting for Approval',
            'type' => 'DP',
        ],
        [
            'name' => 'Hold',
            'type' => 'DP',
        ],
        [
            'name' => 'In Active Partner',
            'type' => 'DP',
        ]

    ];
}
