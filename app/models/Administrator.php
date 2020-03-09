<?php

class Administrator
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data)
    {
        $this->db->query('INSERT  INTO `police_station`(police_station_name,area,police_station_address,police_station_contact1,police_station_contact2,police_station_admin_name,police_station_email,
        password) VALUES(:pol_name,:pol_area,:pol_address,:pol_contact1,:pol_contact2,:pol_admin,:pol_email,:password)');
        $this->db->bind(':pol_name', $data['pol_name']);
        $this->db->bind(':pol_area', $data['pol_area']);
        $this->db->bind(':pol_address', $data['pol_address']);
        $this->db->bind(':pol_contact1', $data['pol_contact1']);
        $this->db->bind(':pol_contact2', $data['pol_contact2']);
        $this->db->bind(':pol_admin', $data['pol_sta_admin_name']);
        $this->db->bind(':pol_email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function login($polstation, $password)
    {
        $this->db->query('SELECT * FROM police_station WHERE police_station_name=:station');
        $this->db->bind(':station', $polstation);


        $row = $this->db->single();

        $password_hash = $row->password;

        if (password_verify($password, $password_hash)) {
            return $row;
        } else {
            return false;
        }

        var_dump($row);
        if ($this->db->rowCount() > 0) {
        } else {
            return false;
        }
    }

    public function findUserEmail($email)

    {
        $this->db->query('SELECT * FROM police_station WHERE police_station_email =:email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function uniqueStationName($name)
    {
        $sql = 'SELECT * FROM police_station WHERE police_station_name=:name';
        $this->db->query($sql);
        $this->db->bind(':name', $name);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
