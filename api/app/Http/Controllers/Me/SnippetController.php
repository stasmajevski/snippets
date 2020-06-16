<?php

namespace App\Http\Controllers\Me;

use App\Http\Controllers\Controller;
use App\Transformers\Snippets\SnippetTransformer;
use Illuminate\Http\Request;

class SnippetController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function index(Request $request)
    {
        return fractal()
            ->collection($request->user()->snippets)
            ->transformWith(new SnippetTransformer())
            ->toArray();
    }
}
