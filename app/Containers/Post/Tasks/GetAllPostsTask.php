<?php

namespace App\Containers\Post\Tasks;

use App\Containers\Post\Data\Repositories\PostRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllPostsTask extends Task
{

    private $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
