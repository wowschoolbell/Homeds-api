<?php

namespace App\Models;

class Store
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'store_id', 'app_plan_id', 'app_status_id', 'plan_type', 'contact_person_name', 'phone', 'email',
        'mobile', 'logo', 'image', 'color_code', 'pincode', 'longitude', 'latitude', 'address',
        'gst_number', 'drug_license_no', 'pan', 'aadhar', 'bank_name', 'ifsc', 'bank_account_number'
    ];

}
