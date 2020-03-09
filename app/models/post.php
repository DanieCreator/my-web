<?php

class Post
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getPosts()
    {
        $this->db->query('SELECT *,
                          posts.p_id as postId,
                          users.user_key as userId
                           FROM posts 
                           INNER JOIN users
                           ON posts.user_key =users.user_key
                           ORDER BY posts.created_at
                           ');
        $result = $this->db->resultset();
        return $result;
    }
    public function addpost($data)
    {
        $this->db->query('INSERT INTO posts (user_key,title,Body) VALUES(:user_id,:title,:body)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);


        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function getPostById($id)
    {
        $this->db->query('SELECT * FROM posts WHERE p_id=:id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
}
