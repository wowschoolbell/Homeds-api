<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'plan_type'
    ];

    protected $casts = [
        'plan_type' => 'array',
    ];

    public static $appPlans = [
        [
            'name'          => 'HOMEDS',
            'description'   => "1 Registration | 5 Users | Unlimited Products ,
                                Orders and Delivery | Free Delivery Partner | Available reports & Dashboard |
                                HoMEds App Name | Free Setup Cost",
            'plan_type'     => [
                                    'M' => 'Monthly', 'Y' => 'Yearly'
                                ]
        ],
        [
            'name'          => 'WHITE LABEL',
            'description'   => "1 Registration | 5 Users | Unlimited Products ,Orders and Delivery 
                                | Free Delivery Partner | Available reports & Dashboard |
                                App Name : Your store name, App name | Available setup cost",
            'plan_type'     => [
                                    'M' => 'Monthly', 'Y' => 'Yearly'
                                ]
        ]
    ];
}
