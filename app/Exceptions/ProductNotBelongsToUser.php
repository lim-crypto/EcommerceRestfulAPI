<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render($request)
    {
        return response([
            'errors' => 'Product not belongs to user'
        ], 403);
    }
}
