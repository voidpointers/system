<?php

namespace Api\Shop\V1\Controllers;

use Api\Shop\V1\Transforms\ShopTransformer;
use App\Controller;
use Dingo\Api\Http\Request;
use Shop\Entities\Shop;

class ShopsController extends Controller
{
    protected $hidden = ['access_token', 'access_secret'];

    public function index(Request $request)
    {
        $query = $request->input('query', '');

        $columns = [];
        if ('few' == $query) {
            $columns = ['shop_id', 'shop_name', 'user_id', 'username', 'icon'];
        }

        $query = Shop::query()->where(['status' => 1]);
        if ($columns) {
            $data = $query->get($columns);
        } else {
            $data = $query->get();
        }

        return $this->response->collection(
            $data,
            ShopTransformer::class
        );
    }

    public function store(Request $request)
    {

    }
}
