<?php
class Siswa_model
{
    private $table = 'siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // * manual 
    // private $mhs = [
    //     [
    //         "nama" => "Muhammad Cahyo",
    //         "nim" => "00921",
    //         "email" => "cahya@email.com",
    //         "jurusan" => "TI"
    //     ],
    //     [
    //         "nama" => "Muhammad Mahfud",
    //         "nim" => "1142",
    //         "email" => "mahfud@email.com",
    //         "jurusan" => "SI"
    //     ],
    //     [
    //         "nama" => "Pinsensius Andreas",
    //         "nim" => "1125",
    //         "email" => "pinsen29@email.com",
    //         "jurusan" => "SI"
    //     ]
    // ];


    public function getAllSiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataSiswa($data)
    {
        $query = "INSERT INTO siswa
                    Values 
                    ('', :nama, :email, :jurusan, :password)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('password', $data['password']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function masuk($email, $password)
    {
        $query = "SELECT * FROM siswa WHERE email=:email OR password=:password";
        $this->db->query($query);
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        $this->db->execute();
        return $this->db->single();
    }
}
