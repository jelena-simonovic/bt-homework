<?php
include('db.php');


try {
    class Users
    {
        private $db;

        public function __construct()
        {
            $this->db = new DB();
            $this->db = $this->db->connect();
        }
        public function addValues()
        {
            $sql = "INSERT INTO users (name, email, password, email_verified_at, created_at)
        VALUES 
        ('names', 'afafal@em', 'pass3wo', 'null', '2020-12-03'),
        ('namis', 'emasdsa@em', 'passdaswo','null'),
        ('namas', 'emadasdail@em', 'pasadaswo', '2020-12-03', '2022-03-6'),
        ('namrs', 'emailasd@em', 'passwdao', 'null', '2021-08-09'),
        ('namasds', 'emaadail@em', 'passassawo', '2020-09-27', '2019-07-12'),
        ('namasds', 'emaasffasil@em', 'paasdasswo', '2020-07-03', '2018-01-02'),
        ('dfafes', 'emaiaal@em', 'passdaw', 'null', '2022-05-24'),
        ('naasfass', 'emaiasal@em', 'asadswo', '2020-05-06', '2020-10-05'),
        ('namsafdasfs', 'emaadsil@em', 'paf32sswo', '2020-11-23', '2021-10-21'),
        ('nadsaames', 'emaadil@em', 'passfdswo', '2020-12-16', '2022-04-01')";
            $this->db->query($sql);
        }
    }
    $users = new Users();
    $users->addValues();
} catch (Exception $exception) {
    echo $exception->getMessage();
}
