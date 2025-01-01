<?php 

namespace App\Repositories;

use App\Models\Post;

class PostRepository 
{
    public function all()
    {
        return Post::all();
    }

    public function create(array $data) 
    {
        return Post::create($data);
    }

    public function find(int $id)
    {
        return Post::findOrFail($id);
    }

    public function update(int $id, array $data)
    {
        $post = $this->find($id);
        $post->update($data);
        return $post;
    }

    public function delete(int $id)
    {
        return Post::destroy($$id);
    }
}