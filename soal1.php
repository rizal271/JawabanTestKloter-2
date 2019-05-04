<?php


// membuat class biodata
 class Biodata{

  // menyimpan data dalam array
  public $d = [];

  // fungsi nama
  public function nama($nama)
  {
    $this->d['name'] = $nama;
    return $this;
  }

  // fungsi alamat
  public function alamat($alamat)
  {
    $this->d['address'] = $alamat;
    return $this;
  }

  // fungsi hobi
  public function hobi($hobi = array())
  {
    $this->d['hobbies'] = $hobi;
    return $this;
  }
  
  // fungsi menikah
  public function menikah($menikah)
  {
    $this->d['is_married'] = $menikah;
    return $this;
  }
  
  // fungsi sekolah
  public function sekolah($sekolah = array())
  {
    $this->d['school'] = $sekolah;
    return $this;
  }

  // fungsi kemampuan
  public function kemampuan($kemampuan = array())
  {
    $this->d['skills'] = $kemampuan;
    return $this;
  }

  // fungsi konvert ke json
  public function tojson(){
    return json_encode($this->d, JSON_PRETTY_PRINT);
  }
  
}

$biodata  = new Biodata();
$nama   = "Rizal Rohman Abdul Dzalil";
$alamat   = "Wado, Sumedang, Jawa Barat";
$hobi     = array('Baca Buku', 'Koding', 'Mencari Hal Baru' );
$is_married = false;
if ($is_married == true) {
  $a = "Sudah Menikah";
}else{
  $a = "Belum Menikah";
}
$sekolah  = ['SD' => 'SDN Cidadap', 'SMP' => 'SMP Ibrahimy 1 Sukorejo', 'SMA' => 'SMA Ibrahimy Sukorejo', 'D3' => 'Universitas Ibrahimy Sukorejo, Prodi Manajemen Informatika','S1' => 'Universitas Nurul Jadid Paiton, Prodi Teknik Informatika' ];
$kemampuan  = ['Hardskill' => 'Pemerograman Web, Analisis Sistem, Pemerogram Android' , 'Softkill' => 'Jujur, Giat dan Ikhlas','Keahlian Komputer' => 'Mamapu mengoperasikan OS,baik Windows Maupun Linux. Mampu menggunakan Ms.Office Mampu menggunakan adobe Photoshop dan Corel draw Mampu menggunakan mikrotik dan seting jaringan komputer'];
print_r($biodata->nama($nama)
        ->alamat($alamat)
        ->hobi($hobi)
        ->menikah($a)
        ->sekolah($sekolah)
        ->kemampuan($kemampuan)
        ->tojson()
);
