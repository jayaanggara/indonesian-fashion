<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'branch',
        'username',
        'email',
        'password',
        'full_name',
        'place_of_birth',
        'date_of_birth',
        'gender',
        'status',
        'address_member',
        'telephone',
        'fax',
        'mobile_phone',
        'education_mode',
        'company_name',
        'company_address',
        'production_capacity',
        'stockist_or_branch_address',
        'brand',
        'number_of_permanent_emp',
        'income_per_month',
        'number_of_outsourcing_emp',
        'start_price_range',
        'end_price_range',
        'min_order',
        'gender_category',
        'age_category',
        'market',
        'business_type',
        'product_type',
        'product_character',
        'recomendation_1',
        'recomendation_2',
        'img_ktp',
        'img_photo',
        'email_verified_at',
    ];
}
