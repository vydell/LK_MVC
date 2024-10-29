<?php

class Barang
{

    private $id;
    private $nama;
    private $qty;

    public function __construct()
    {
        $this->id = "A001";
        $this->nama = "Buku Bahasa Indonesia";
        $this->qty = "100";
    }
    public function getData()
    {
        return "Data yang diminta dari model barang : $this->nama, $this->id, $this->qty";
    }

    public function getDataOne() {
        $data = [
            'id' => $this->id,
            'nama' => $this->nama,
            'qty' => $this->qty,
        ];
        return $data;
    }
}
