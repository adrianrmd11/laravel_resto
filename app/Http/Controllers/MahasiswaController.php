<?php

namespace App\Http\Controllers;

    class MahasiswaController extends Controller
{
    private $nama;
    private $nim;

    public function __construct()
    {
        // Data bisa nanti diganti dinamis
        $this->nama = "Adrian Ramadhan";
        $this->nim = "23050558";
    }

    public function index()
    {
        return view('mahasiswa', [
            'nama' => $this->getNama(),
            'nim' => $this->getNim()
        ]);
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getNim()
    {
        return $this->nim;
    }
}


