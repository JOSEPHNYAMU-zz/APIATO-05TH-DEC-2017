<?php

namespace App\Containers\Post\UI\WEB\Controllers;

use App\Containers\Post\UI\WEB\Requests\CreatePostRequest;
use App\Containers\Post\UI\WEB\Requests\DeletePostRequest;
use App\Containers\Post\UI\WEB\Requests\GetAllPostsRequest;
use App\Containers\Post\UI\WEB\Requests\FindPostByIdRequest;
use App\Containers\Post\UI\WEB\Requests\UpdatePostRequest;
use App\Containers\Post\UI\WEB\Requests\StoreUserRequest;
use App\Containers\Post\UI\WEB\Requests\EditPostRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Post\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllPostsRequest $request
     */
    public function index(GetAllPostsRequest $request)
    {
        $posts = Apiato::call('Post@GetAllPostsAction', [$request]);

        return view('post::index', compact('posts'));


        // ..
    }

    /**
     * Show one entity
     *
     * @param FindPostByIdRequest $request
     */
    public function show(FindPostByIdRequest $request)
    {
        $post = Apiato::call('Post@FindPostByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreatePostRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(CreatePostRequest $request)
    {
        return view('post::create');
    }

    /**
     * Add a new entity
     *
     * @param StoreUserRequest $request
     */
    public function store(StoreUserRequest $request)
    {
        $post = Apiato::call('Post@CreatePostAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditPostRequest $request
     */
    public function edit(EditPostRequest $request)
    {
        $post = Apiato::call('Post@FindPostByIdAction', [$request]);
        return view('post::edit', compact('post'));

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdatePostRequest $request
     */
    public function update(UpdatePostRequest $request)
    {
        $post = Apiato::call('Post@UpdatePostAction', [$request]);

        return view('post::edit', compact('post'));

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeletePostRequest $request
     */
    public function delete(DeletePostRequest $request)
    {
         $result = Apiato::call('Post@DeletePostAction', [$request]);

         // ..
    }
}
