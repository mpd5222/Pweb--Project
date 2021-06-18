<?php
class Daftarsekolah_model
{
    private $table = 'daftarsekolah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDaftarsekolah()
    {
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet(); 
    }
}