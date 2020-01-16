<?php
class Biblioteque_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getAll($n = 1)
    {
        $query = $this->db->query("SELECT * FROM `livre`
        LIMIT 6 OFFSET($n - 1)*6;");
        return $query->result();
    }

    public function getByType($type, $language, $n = 1)
    {
        $query = $this->db->query("SELECT * FROM `livre`
        WHERE `Type`=$type
        AND `Language`=$language
        LIMIT 6 OFFSET($n - 1)*6;
        ");
        return $query->result();
    }

    public function getByKeywords($keywords, $language , $n = 1)
    {
        $query = $this->db->query("SELECT * FROM `livre`
        WHERE `Search-Keywords` LIKE %$keywords%
        OR `Title` LIKE %$keywords%
        OR `Author` LIKE %$keywords%
        OR `Subtitle` LIKE %$keywords%
        AND `Language`=$language
        LIMIT 6 OFFSET($n - 1)*6;");
        $query['Code'] = $query['de (ISBN, EAN, OLEFA9'];
        return $query->result();
    }
}

?>