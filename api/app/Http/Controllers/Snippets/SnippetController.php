<?php

namespace App\Http\Controllers\Snippets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SnippetController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api']);
    }

    public function store(Request $request)
    {
        $snippet = $request->user()->snippets()->create([
            'uuid' => Str::uuid()
        ]);
    }
}
