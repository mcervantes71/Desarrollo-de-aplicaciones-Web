<?php
    class User
    {
        private $db;

        public function __constructor()
        {
            $this->db = new Database;
        }

        public function findUserByEmail($email)
        {
            $this->db->query('SELECT * FROM User WHERE user_email = :email');

            $this->db->bind(':email', $email);

            $row = $this->single();

            if($this->db->rowCount() > 0)
                return true;
            else
                return false;
        }
    }
?>
