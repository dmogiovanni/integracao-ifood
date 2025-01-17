<?php

namespace Dmogiovanni\LaravelIfood\Http\Controllers;

use Dmogiovanni\LaravelIfood\IfoodClient;

class OrderDetails
{
    use IfoodClient;
    public function getOrderDetails($id)
    {
        // ----------------------
        $request = $this->client->request('GET', "order/v1.0/orders/$id");
        $response = $request->getBody();
        return ($request->getStatusCode() == 200) ? $response->getContents() : $request->getStatusCode();
    }

    public static function show($id)
    {
        return app(Details::class)->getOrderDetails($id);
    }
}
