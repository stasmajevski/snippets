<?php

namespace App\Http\Controllers\Snippets;

use App\Http\Controllers\Controller;
use App\Snippet;
use App\Step;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function update(Snippet $snippet, Step $step, Request $request)
    {
        $step->update($request->only('title', 'body'));
    }
}
