<?php 

namespace App\Services;

use App\Repositories\PostRepository;
use Faker\Factory as Faker;

class PostService 
{
    protected $postRepository;

    public function __construct(PostRepository $postRepository){
        $this->postRepository = $postRepository;
    }

    public function generateDummyPost()
    {
        $faker = Faker::create();
        $data = [
            "title"=> $faker->sentence,
            "slug"=> $faker->slug,
            "content"=> $faker->paragraph,
        ];
        return $this->postRepository->create($data);
    }

    public function getAllPosts() 
    {
        return $this->postRepository->all();
    }

    public function createPost(array $data)
    {
        $data['slug'] = strtolower(str_replace(' ', '-', $data['title']));
        return $this->postRepository->create($data);
    }
}