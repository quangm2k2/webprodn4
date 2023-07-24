<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;

    public function __construct(ProductServiceInterface $productService, ProductCommentServiceInterface $productCommentService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
    }

    public function show($id)
    {
        $product = $this->productService->find($id);

        return view('front.shop.product', compact('product'));
    }

    public function postComment(Request $request): RedirectResponse
    {
        $this->productCommentService->create($request->all());
        return redirect()->back();
    }
}
