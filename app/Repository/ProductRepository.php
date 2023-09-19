<?php

namespace App\Repository;

use App\Service\ProductService;

class ProductRepository implements ProductInterface
{
    public $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return $this->productService->index();
    }

    public function store()
    {
        $result = $this->productService->store();
        if (!is_null($result)){
            return redirect()->back()->with('success', 'Success');
        }
        return redirect()->back()->with('error','Error');
    }

}
