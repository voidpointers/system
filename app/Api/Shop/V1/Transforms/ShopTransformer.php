<?php

namespace Api\Shop\V1\Transforms;

use League\Fractal\TransformerAbstract;
use Shop\Entities\Shop;

class ShopTransformer extends TransformerAbstract
{
    public function transform(Shop $shop)
    {
        return $shop->attributesToArray();
    }
}
