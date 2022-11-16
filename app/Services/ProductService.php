<?php

namespace App\Services;

use App\Http\Resources\ProductResource;
use App\Models\Product;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService
{
    public function store($data)
    {
        if(request()->hasFile('attachments')) {
            $attachments = [];
            foreach(request()->file('attachments') as $attachment) {
                $attachments[] = $this->uploadFile($attachment, 'uploads/products');
            }
            $data['attachments'] = $attachments;
        }
        $product = Product::create($data);
        return new ProductResource($product);
    }

    public function getAllVendorProducts($id)
    {
        $products = Product::where('user_id', $id)->get();
        return ProductResource::collection($products);
    }

    public function show($productID)
    {
        $product = Product::findOrFail($productID);
        return new ProductResource($product);
    }

    public function update($productID, $data)
    {
        $product = Product::findOrFail($productID);
        return new ProductResource($product);
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json(['message' => 'Product removed successfully']);
    }

    private function uploadFile($file, $path = 'uploads')
    {
        $name = rand(999, 9999) . time() . rand(1, 9) . "." . $file->getClientOriginalExtension();
        $file = $file->move(public_path($path), $name);
        return substr($path, -1) == '/' ? $path : "$path/" . $name;
    }
}
