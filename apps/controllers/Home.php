<?php


class Home extends Controller
{
    private $dt;
    private $df;

    public function __construct()
    {
        $this->dt = $this->loadmodel("barang");
        $this->df = $this->loadmodel("daftarBarang");
    }

    public function index()
    {
        echo "anda memanggil action index.\n";
    }

    public function home($data1, $data2)
    {
        echo "anda memanggil action home dengan data1 = $data1 dan data2 = $data2\n";
    }

    public function lihatData($id)
    {
        $data = $this->df->getDataById($id);

        $this->loadView('template/header', ['title' => 'Detail Barang']);
        $this->loadView('home/detailbarang', $data);
        $this->loadView('template/footer');
    }

    public function listBarang()
    {
        $data = $this->df->getDataAll();

        $this->loadView('template/header', ['title' => 'List Barang']);
        $this->loadView('home/listbarang', $data);
        $this->loadView('template/footer');
    }
}
