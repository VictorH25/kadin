<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order_product_additional;
use App\Models\Order;
use App\Models\Product;

class Order_product extends Model
{
    use HasFactory;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_products';
    
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id','product_id','updated_at','created_at','active'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function orderproductsadditionals()
    {
        return $this->hasMany(Order_product_additional::class,'order_product_id');
    }
}