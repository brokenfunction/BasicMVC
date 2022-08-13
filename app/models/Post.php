<?php

class Post {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getPosts() {
        $this->db->query('SELECT *, 
        posts.ID as postId,
        users.ID as userId,
        posts.created_at as postCreated,
        users.created_at as userCreated
        FROM posts
        INNER JOIN users ON posts.user_id = users.ID
        ORDER BY posts.created_at DESC');
        return $this->db->resultSet();
    }
}