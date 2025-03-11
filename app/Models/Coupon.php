<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coupons';
    
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id','operator_name','client_name','purchase_date','purchase_time','password','sum','percentage','amount','value_payment','change','address','address_number','delivery','type','trip','key','desk','logo','footer','title','updated_at','created_at','active'
    ];


}