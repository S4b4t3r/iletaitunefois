<?php
class Biblioteque_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getLast()
    {
        $query = $this->db->query("SELECT * FROM `livre`
        LIMIT 3");
        return $query->result();
    }

    public function getPage($n = 1)
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
        $o = ($n-1)*6;
        $query = $this->db->query("SELECT * FROM `livre`
        WHERE `Search-Keywords` LIKE '%$keywords%'
        OR `Title` LIKE '%$keywords%'
        OR `Author` LIKE '%$keywords%'
        OR `Subtitle` LIKE '%$keywords%'
        AND `Language` LIKE '%$language%'
        LIMIT 6 OFFSET $o;");
        return $query->result();
    }

    public function getByKeywordsAll($keywords, $language)
    {
        $query = $this->db->query("SELECT * FROM `livre`
        WHERE `Search-Keywords` LIKE '%$keywords%'
        OR `Title` LIKE '%$keywords%'
        OR `Author` LIKE '%$keywords%'
        OR `Subtitle` LIKE '%$keywords%'
        AND `Language`='$language';");
        return $query->result();
    }
}

?>