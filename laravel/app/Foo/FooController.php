<?php

namespace App\Foo;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class FooController
{
    public function __invoke(Request $request): JsonResponse
    {
        return response()->json([
            'foo' => 'bar',
        ]);
    }
}
