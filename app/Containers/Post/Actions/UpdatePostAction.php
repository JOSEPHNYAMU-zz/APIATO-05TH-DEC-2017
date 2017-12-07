<?php

namespace App\Containers\Post\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\Auth;

class UpdatePostAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'title', 'body'
        ]);

        $post = Apiato::call('Post@UpdatePostTask', [$request->id, $data]);

        return $post;
    }
}
