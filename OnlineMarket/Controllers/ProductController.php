<?php

namespace OnlineMarket\Controllers;

use OnlineMarket\Models\Product;
use OnlineMarket\Requests\Product\StoreRequest;
use OnlineMarket\Requests\Product\UpdateRequest;
use OnlineMarket\Services\ProductService;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    protected $service;

    public function __construct()
    {
        $this->service = new ProductService();
    }

    public function index()
    {
        $products = $this->service->index();
        return view('online-market::products.index', compact('products'));
    }

    public function create()
    {
        $product = new Product();
        return view('online-market::products.create', compact('product'));
    }

    public function store(StoreRequest $request)
    {
        $this->service->store($request->validated());
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        return view('online-market::products.edit', compact('product'));
    }

    public function update(UpdateRequest $request, $id)
    {
        $this->service->update($request->validated(), $id);
        return redirect()->route('products.index');
    }

    public function show(Product $product)
    {
        return view('online-market::products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        $this->service->destroy($product);
        return redirect()->route('products.index');
    }
}
