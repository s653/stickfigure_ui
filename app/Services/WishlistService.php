<?php

namespace App\Services;

use App\Http\Resources\ProductResource;
use App\Models\Wishlist;

/**
 * Class FollowService
 * @package App\Services
 */
class WishlistService
{
    public function wishlist()
    {
        $wishlists = Wishlist::select('products.*')
            ->join('products', 'products.id', '=', 'wishlists.product_id')
            ->where('user_id', auth()->id())->simplePaginate(10);
        return ProductResource::collection($wishlists);
    }

    public function store($id)
    {
        $userID = auth()->id();
        $id = customDecrypt($id);

        $wishlist = Wishlist::where('user_id', $userID)->where('product_id', $id)->first();
        if($wishlist) {
            $wishlist->delete();
        } else {
            Wishlist::create([
                'user_id' => $userID,
                'product_id' => $id
            ]);
        }
        $status = $wishlist ? 200 : 201;
        return response()->json(['message' => $wishlist ? 'Product removed successfully' : 'Added to cart successfully'],$status);
    }
}
