<?php

namespace OnlineMarket\Services;

use OnlineMarket\Models\Product;

class ProductService
{
    public function index()
    {
        return Product::paginate(10);
    }

    public function store(array $data)
    {
        Product::create($data);
    }

    public function show($id)
    {
        return Product::findOrFail($id);
    }

    public function update(array $data, $id)
    {
        $product = $this->show($id);
        $product->update($data);
    }

    public function destroy($product)
    {
        $product->delete();
    }
}
