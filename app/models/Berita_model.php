<?php
class Berita_model
{
    private $table = 'berita';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBerita()
    {
       $this->db->query('SELECT * FROM ' . $this->table);
       return $this->db->resultSet(); 
    }
}