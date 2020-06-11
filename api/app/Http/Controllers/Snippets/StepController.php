<?php

namespace App\Http\Controllers\Snippets;

use App\Http\Controllers\Controller;
use App\Snippet;
use App\Step;
use App\Transformers\Snippets\StepTransformer;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public function update(Snippet $snippet, Step $step, Request $request)
    {
        $step->update($request->only('title', 'body'));
    }

    public function store(Snippet $snippet, Request $request)
    {
        $step = $snippet->steps()->create(array_merge($request->only('title', 'body'),[
            'order' => $this->getOrder($request)
        ]));

        return fractal()
            ->item($step)
            ->transformWith(new StepTransformer())
            ->toArray();
    }

    protected function getOrder(Request $request)
    {
        return Step::where('uuid', $request->before)
            ->orWhere('uuid', $request->after)
            ->first()
            ->{($request->before ? 'before' : 'after') . 'Order'}(); // dynamic method based on request -- afterOrder() or beforeOrder() that comes from client side
    }
}
