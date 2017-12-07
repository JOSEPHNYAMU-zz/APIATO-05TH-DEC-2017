<?php

namespace App\Containers\Post\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class PostRepository
 */
class PostRepository extends Repository
{

    /**
     * The Container Name.
	 * Must be set when the model has a different name than the container
	 */
    protected $container = 'Post';

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
