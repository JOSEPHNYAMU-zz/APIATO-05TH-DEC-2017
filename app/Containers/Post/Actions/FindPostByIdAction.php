<?php

namespace App\Containers\Post\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindPostByIdAction extends Action
{
    public function run(Request $request)
    {
        $post = Apiato::call('Post@FindPostByIdTask', [$request->id]);

        return $post;
    }
}
