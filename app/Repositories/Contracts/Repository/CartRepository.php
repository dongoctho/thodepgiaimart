<?php

namespace App\Repositories\Contracts\Repository;

use App\Models\Cart;
use App\Repositories\Contracts\RepositoryInterface\CartRepositoryInterface;
use App\Repositories\BaseRepository;

class CartRepository extends BaseRepository implements CartRepositoryInterface
{
    public function getModel()
    {
        return Cart::class;
    }

}
