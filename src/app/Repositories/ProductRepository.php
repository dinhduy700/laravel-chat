<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getProducts()
    {
        return Product::paginate(3);
    }
}
