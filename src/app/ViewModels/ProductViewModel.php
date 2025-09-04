<?php

namespace App\ViewModels;

use Illuminate\Pagination\LengthAwarePaginator;

class ProductViewModel
{
    private ?LengthAwarePaginator $products = null;

    public function setProducts(LengthAwarePaginator $products)
    {
        $this->products = $products;
    }

    public function getProducts(): ?LengthAwarePaginator
    {
        return $this->products;
    }
}
