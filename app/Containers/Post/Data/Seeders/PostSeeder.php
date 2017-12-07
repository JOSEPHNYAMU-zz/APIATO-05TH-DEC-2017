<?php
namespace App\Containers\Post\Data\Seeders;
use App\Containers\Post\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database Seeders.
     *
     * @return void
     */
    public function run()
    {

        factory(Post::class, 20)->create();
    }
}
