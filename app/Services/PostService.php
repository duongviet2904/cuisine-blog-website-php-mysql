<?php
namespace App\Services;

use App\Repositories\PostRepository;
use Core\Request;

class PostService
{
    protected $postRepository;
    protected $request;

    public function __construct()
    {
        $this->postRepository = new PostRepository();
        $this->request = new Request();
    }

    public function savePost($data) {
        $postId = $data['id'] ?? null;
        $data = [
            'title' => $data['title'],
            'content' => $data['content'],
            'users_id' => '1',
            'description' => $data['description'],
        ];
        $data['status'] = '1';
        if($postId){
            $data['id'] = $postId;
        }
            // Directory where you want to save the image
        $targetDirectory = "assets/uploads/";

            // Check if directory exists; if not, create it
        if (!is_dir($targetDirectory)) {
            mkdir($targetDirectory, 0777, true);
        }

        // Get the uploaded file info
        $image = $this->request->getFileRequest()['thumbnail'];
        $imageName = basename($image['name']);
        $targetFile = $targetDirectory . $imageName;

        // Check file size (optional)
        if ($image['size'] > 5000000) { // 5MB limit
            echo "Sorry, your file is too large.";
            exit;
        }

        // Allow only certain file types (optional)
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if(!isset($data['id'])) {
            if (!in_array($imageFileType, $allowedTypes)) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                exit;
            }
        }

        if (move_uploaded_file($image['tmp_name'], $targetFile)) {
            $data['thumbnail'] = $targetFile;
            echo "The file " . htmlspecialchars($imageName) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }

        $data['slug'] = $this->createSlug($data['title']);

        if(!isset($data['id'])) {
            $data['created_at'] = date('Y-m-d H:i:s');
        }else{
            $data['modified_at'] = date('Y-m-d H:i:s');
        }
//        var_dump($data);die(2);
        $newPostId = $this->postRepository->save($data);
        if($newPostId){
            return "Created Successfully";
        }
        return "Failed to create Account";
    }

    public function createSlug($string) {
        $string = strtolower($string);
        $string = preg_replace('/[áàảãạăắằẳẵặâấầẩẫậ]/u', 'a', $string);
        $string = preg_replace('/[éèẻẽẹêếềểễệ]/u', 'e', $string);
        $string = preg_replace('/[íìỉĩị]/u', 'i', $string);
        $string = preg_replace('/[óòỏõọôốồổỗộơớờởỡợ]/u', 'o', $string);
        $string = preg_replace('/[úùủũụưứừửữự]/u', 'u', $string);
        $string = preg_replace('/[ýỳỷỹỵ]/u', 'y', $string);
        $string = preg_replace('/[đ]/u', 'd', $string);
        $string = preg_replace('/[^a-z0-9]+/', '-', $string);
        $string .= '-' . time();
        return $string;
    }

    function shortenString($string, $length) {
        if (strlen($string) > $length) {
            return substr($string, 0, $length) . '...'; // Thêm dấu ba chấm
        }
        return $string;
    }
    public function getAllPosts() {
        return $this->postRepository->getAll();
    }

    public function getLimitPosts($limit) {
        return $this->postRepository->getAll($limit);
    }

    public function getPostById($id) {
        return $this->postRepository->getById($id);
    }

    public function deletePostById($id) {
        $data = ['id' => $id, 'status' => '0', 'modified_at' => date('Y-m-d H:i:s')];
        return $this->postRepository->delete($data) ? 'Delete successfully!' : 'Delete failed. Please try it later!';
    }
}