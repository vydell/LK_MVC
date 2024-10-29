<?php


class daftarBarang extends Model
{
    private $daftar = array();

    public function getDataAll()
    {
        $stmt = "select * from daftarBarang";
        $query = $this->db->query($stmt);
        $data = array();

        while ($result = $this->db->fetch_array($query)) {
            $data[] = $result;
        }
        return $data;
    }

    public function getDataById($id)
    {
        $stmt = "select * from daftarBarang where id = $id";
        $query = $this->db->query($stmt);
        $data = $this->db->fetch_array($query);

        return $data;
    }
}
