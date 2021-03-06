<?php

namespace App;
use App\Product;
use App\Scopes\SellerScope;
use App\User;

class Seller extends User
{

    protected static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        static::addGlobalScope(new SellerScope);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
