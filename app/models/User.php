<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data)
    {
        $sql = 'INSERT INTO users(firstName,lastName,email,mobile,password)
         VALUES(:first_name,:last_name,:email,:mobile,:password)';
        $this->db->query($sql);
        $this->db->bind(':first_name', $data['fname']);
        $this->db->bind(':last_name', $data['lname']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':mobile', $data['Mobile']);
        $this->db->bind(':password', $data['Password']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //login user
    public function login($email, $Password)
    {
        $sql = 'SELECT *FROM users WHERE Email=:email';
        $this->db->query($sql);
        $this->db->bind(':email', $email);
        $row = $this->db->single();

        $password_hash = $row->password;

        if (password_verify($Password, $password_hash)) {
            return $row;
        } else {
            return false;
        }
    }
    public function findUserEmail($email)

    {
        $this->db->query('SELECT * FROM users WHERE Email =:email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM users WHERE user_key=:id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
}
