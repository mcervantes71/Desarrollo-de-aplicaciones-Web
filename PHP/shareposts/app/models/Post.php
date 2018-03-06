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
                                     Posts.post_id as postId,
                                     Users.user_id as userId
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
    }
