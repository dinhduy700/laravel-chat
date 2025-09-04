<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\ProductService;
use App\DTO\ProductListDTO;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        $dto = new ProductListDTO(
            $request->input('page_size', 10),
            $request->input('page', 1)
        );

        $products = $this->productService->getProducts($dto);

        return view('product.index', compact('products'));
    }
}
