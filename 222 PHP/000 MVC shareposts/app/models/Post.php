<?php
    class Post
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getPostById($post_id)
        {
            $this->db->query('SELECT *
                              FROM Posts
                              INNER JOIN Users
                              ON Posts.user_id = Users.user_id
                              WHERE post_id = :post_id');

            // Bind Values
            $this->db->bind(':post_id', $post_id);

            $row = $this->db->single();

            return $row;
        }

        public function getPosts()
        {
            $this->db->query('SELECT *
                              FROM Posts
                              INNER JOIN Users
                              ON Posts.user_id = Users.user_id
                              ORDER BY Posts.post_created_at
                              DESC');

            $result = $this->db->resultSet();

            return $result;
        }

        public function addPost($data)
        {
            $this->db->query('INSERT INTO Posts (post_title,
                                                 user_id,
                                                 post_body)
                              VALUES (:post_title,
                                      :user_id,
                                      :post_body)');

            // Bind Values
            $this->db->bind(':post_title', $data['title']);
            $this->db->bind(':user_id', $data['user_id']);
            $this->db->bind(':post_body', $data['body']);

            if($this->db->execute())
                return true;
            else
                return false;
        }

        public function updatePost($data)
        {
            $this->db->query('UPDATE Posts
                              SET post_title = :post_title,
                                  post_body = :post_body
                              WHERE post_id = :post_id');

            // Bind Values
            $this->db->bind(':post_id', $data['post_id']);
            $this->db->bind(':post_title', $data['title']);
            $this->db->bind(':post_body', $data['body']);

            if($this->db->execute())
                return true;
            else
                return false;
        }

        public function deletePost($post_id)
        {
            $this->db->query('DELETE FROM Posts
                              WHERE post_id = :post_id');

            // Bind Values
            $this->db->bind(':post_id', $data['post_id']);

            if($this->db->execute())
                return true;
            else
                return false;
        }
    }
