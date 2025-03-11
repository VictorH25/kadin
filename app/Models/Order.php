<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_product;
use App\Models\User;

class Order extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orders';
    
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name_customer','id_user','id_client','delivery', 'open', 'form_of_payment','delivered','key','desk','amount','updated_at','created_at','active'
    ];

    public function orderproducts()
    {
        return $this->hasMany(Order_product::class,'order_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

}