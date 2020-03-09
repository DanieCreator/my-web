<?php


class Report
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function add($data)
    {
        $sql = "INSERT INTO reports( 
            `national_id`, 
            `title`, 
            `content`,
             `location`,
             `lost_personName`,
             `age`,
             `complexion`,
             `photo` )
                VALUES(
             :national_id,
             :title,
             :content,
             :location,
             :lost_personName,
             :age,
             :complexion,
             :photo)";
        $this->db->query($sql);
        $this->db->bind(':national_id', $data['national_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':content', $data['content']);
        $this->db->bind(':location', $data['location']);
        $this->db->bind(':lost_personName', $data['lost_personName']);
        $this->db->bind(':age', $data['age']);
        $this->db->bind(':complexion', $data['complexion']);
        $this->db->bind(':photo', $data['photo']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
