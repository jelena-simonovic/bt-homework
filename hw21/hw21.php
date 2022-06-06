<?php
include('connect.php');

class Colors
{
    private $db;

    public function __construct()
    {
        $this->db = new DB();
        $this->db = $this->db->connect();
    }
    public function hexValues()
    {
        $sql = "SELECT * FROM colors WHERE status=1";
        $active = $this->db->query($sql);
        $row = $active->fetchAll(PDO::FETCH_ASSOC);
        foreach ($row as $rows) {
            foreach ($rows as $rowValue) {
                return $rowValue;
            }
        }
    }
}


$new = new Colors();

echo $new->hexValues();
