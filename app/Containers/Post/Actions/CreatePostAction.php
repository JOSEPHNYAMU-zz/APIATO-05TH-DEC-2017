<?php

namespace App\Containers\Post\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\Auth;

class CreatePostAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
            'title', 'body'
        ]);
        $data['user_id']=Auth::user()->id;

        $post = Apiato::call('Post@CreatePostTask', [$data]);

        return $post;
    }
}
