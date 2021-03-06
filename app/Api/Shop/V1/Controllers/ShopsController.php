<?php

namespace Api\Shop\V1\Controllers;

use Api\Shop\V1\Transforms\ShopTransformer;
use App\Controller;
use Dingo\Api\Http\Request;
use Shop\Entities\Shop;

class ShopsController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query', '');

        $columns = ['*'];
        if ('few' == $query) {
            $columns = ['shop_id', 'shop_name', 'user_id', 'username', 'icon'];
        }

        $data = Shop::where(['status' => 1])->get($columns);

        return $this->response->collection(
            $data,
            ShopTransformer::class
        );
    }

    public function store(Request $request)
    {

    }
}
