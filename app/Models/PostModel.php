<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
    protected $table = 'photos';
    protected $primaryKey = 'id_photos';
    protected $allowedFields = ['image', 'post_id'];

    public function getPostById($postId)
    {
        return $this->find($postId);
    }
}