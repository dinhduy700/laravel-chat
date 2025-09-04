<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\DTO\ProductListDTO;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProducts(ProductListDTO $dto)
    {
        return $this->productRepository->getProducts(
            $dto->getPageSize(),
            $dto->getPageIndex()
        );
    }
}
