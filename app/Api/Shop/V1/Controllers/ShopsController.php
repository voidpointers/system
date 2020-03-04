<?php

namespace Api\Shop\V1\Controllers;

use Api\Shop\V1\Transforms\ShopTransformer;
use App\Controller;
use Dingo\Api\Http\Request;
use Shop\Entities\Shop;

class ShopsController extends Controller
{
    public function index()
    {
        $data = Shop::where(['status' => 1])->get();

        return $this->response->collection(
            $data,
            ShopTransformer::class
        );
    }

    public function store(Request $request)
    {

    }
}
