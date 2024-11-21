<?php

namespace app\models;

//using the database class namespace
use app\models\Model;

class Post extends Model {

    public function getAllPostsByTitle($title) {
        $query = "select * from post WHERE title like :title";
        return $this->fetchAllWithParams($query, ['title' => '%' . $title. '%']);
    }

    public function getAllPosts() {
        $query = "select * from post";
        return $this->fetchAll($query);
    }

    // get post by content???
    public function getPostByTitle($title){
        $query = "select * from users where title = :title";
        return $this->fetchAllWithParams($query, ['title' => $title]);
    }


    public function savePost($inputData){
        $query = "insert into post (title, content) values (:title, :content);";
        return $this->fetchAllWithParams($query, $inputData);
    }

    public function updatePost($inputData){
        $query = "update post set  title = :title ,content = :content where title = :title";
        return $this->fetchAllWithParams($query, $inputData);
    }

    public function deletePost($inputData){
        $query = "DELETE FROM post where title = :title";
        return $this->fetchAllWithParams($query, $inputData);
    }
}