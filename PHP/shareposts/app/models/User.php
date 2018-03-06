<?php
    class User
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        // Register User
        public function register($data)
        {
            $this->db->query('INSERT INTO Users (user_name,
                                                 user_email,
                                                 user_password)
                                     VALUES (:user_name,
                                             :user_email,
                                             :user_password)');

            // Bind Values
            $this->db->bind(':user_name', $data['name']);
            $this->db->bind(':user_email', $data['email']);
            $this->db->bind(':user_password', $data['password']);

            if($this->db->execute())
                return true;
            else
                return false;
        }

        // Login User
        public function login($email, $password)
        {
            $this->db->query('SELECT * FROM Users WHERE user_email = :user_email');

            $this->db->bind(':user_email', $email);

            $row = $this->db->single();

            $hashed_password = $row->user_password;

            //if(password_verify($password, $hashed_password))
            if($password == $hashed_password)
            {
                return $row;
            }
            else
            {
                return false;
            }
        }

        // Find user by email
        public function findUserByEmail($email)
        {
            $this->db->query('SELECT * FROM Users WHERE user_email = :email');

            $this->db->bind(':email', $email);

            $row = $this->db->single();

            // Check row
            if($this->db->rowCount() > 0)
                return true;
            else
                return false;
        }
    }
