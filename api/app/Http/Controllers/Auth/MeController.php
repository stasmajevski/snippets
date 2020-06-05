<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Transformers\Users\UserTransformer;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function __invoke(Request $request)
    {
        return fractal()
            ->item($request->user())
            ->transformWith(new UserTransformer())
            ->toArray();
    }
}
