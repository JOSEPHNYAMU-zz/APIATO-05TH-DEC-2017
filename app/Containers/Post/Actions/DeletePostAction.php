<?php

namespace App\Containers\Post\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeletePostAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Post@DeletePostTask', [$request->id]);
    }
}
