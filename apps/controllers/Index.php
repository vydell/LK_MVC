<?php

class Index
{

    public function __construct()
    {
        echo "anda berada pada controller Index.\n";
    }

    public function index()
    {
        echo "anda memanggil action index.\n";
    }

    public function home()
    {
        echo "anda memanggil action home.\n";
    }
}
