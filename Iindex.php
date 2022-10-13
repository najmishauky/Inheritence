<?php
  class siswa{
    public $nama = "NAJMI SHAUKY KAMIL";
    public $kelas = "XI";
    protected $jurusan = "PPLG";
    private $nis = "875425738672";

    function tampilDataSiswa(){
      echo "nama : $this->nama <br>";
      echo "kelas : $this->kelas <br>";
      echo "jurusan : $this->jurusan <br>";
      echo "nis : $this->nis <br>";
    }
  }

  $siswa1 = new siswa();
  $siswa1->tampilDataSiswa();
  ?>