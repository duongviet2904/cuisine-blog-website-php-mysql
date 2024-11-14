<?php
namespace App\Repositories;

use App\Models\Post;
use Core\RepositoryImplement;
use Core\RepositoryInterface;
use PDO;

class PostRepository extends RepositoryImplement
{
    public function __construct()
    {
        parent::__construct(new Post());
    }


}