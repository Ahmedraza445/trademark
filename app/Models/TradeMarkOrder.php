<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeMarkOrder extends Model
{
    use HasFactory;

    protected $table = 'trademark_orders';
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'order_id',
        'tr_name',
        'tr_slogan',
        'tr_logo',
        'industry',
        'products',
        'type_of_business',
        'us_based',
        'package',
        'service',
        'user_id',
        'packageName', 'packagePrice', 'serviceName', 'servicePrice', 't_Price',
        'card', 'cardName', 'cardNumber', 'expiry', 'cvc', 'country', 'province', 'city', 'zipCode', 'address'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
