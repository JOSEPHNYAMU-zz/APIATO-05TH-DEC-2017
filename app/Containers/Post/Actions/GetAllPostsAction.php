<?php

namespace App\Containers\Post\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllPostsAction extends Action
{
    public function run(Request $request)
    {
        $posts = Apiato::call('Post@GetAllPostsTask');

        return $posts;
    }
}
