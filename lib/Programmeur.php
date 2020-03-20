<?php

class Programmeur
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findByLanguage($lang) {

        $this->db->query("SELECT * FROM programmeur WHERE langages LIKE '%$lang%'");

        return $this->db->resultSet();
    }

    public function getProgrammeurs() {
        $this->db->query('SELECT * FROM programmeur');

        return $this->db->resultSet();
    }

    public function getLangages() {
        $this->db->query('SELECT langages FROM programmeur');

        return $this->db->resultSet();
    }
}
