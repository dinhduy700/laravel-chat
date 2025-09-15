<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;

class TestController extends Controller
{
    public function defaultAttributeValue(Request $request)
    {
        $user = new User();
        dump(__METHOD__);
        dump($user);

        $user = new User(['status' => 'inactive']);
        dump(__METHOD__);
        dump($user);
    }

    public function bootEloquentTrait()
    {
        $product = new Product();
        $product->name = 'test-bootEloquentTrait-001';
        $product->price = 999;

        $product->save();
    }

    public function appends()
    {
        $product = Product::find(1);

        // $json = $product->toJson();
        dd($product->toArray());
    }
}
