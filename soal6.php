<?php
date_default_timezone_set("Asia/Jakarta");
$db = new mysqli ("localhost","root","","db_rizal")
or die ("Gagal koneksi ke server".mysqli_error());
$hitung = @$_GET['hitung'];
$id     = @$_GET['id'];
?>
<html>
<head>
    <title>Soal Nomer 6</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
</head>
<body>
    <nav class="navbar navbar-blue bg-blue">
        <div class="container">
            <a class="navbar-brand" href="#"> Aplikasi Quick Count Bootcamp</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto mt-4 md-4 shadow-none p-3 mb-5 bg-light rounded">
                <marquee>Aplikasi ini Di buat Oleh Rizal Rohman Abdul Dzalil untuk memenuhi test Bootcamp</marquee>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto mt-4 md-4 shadow p-3 mb-5 bg-white rounded">
                <h2>Hasil Hitung Cepat Versi Test Masuk </h2>
                <?php
                if ($hitung == "") {?>
                    <table class="table text-center">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Paslon</th>
                                <th scope="col">Jumlah Suara</th>
                                <th scope="col">Hitung Suara</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $q = $db->query("SELECT * FROM candidates");
                            while($r = $q->fetch_array()) {
                                ?>
                                <tr>
                                    <td><?php echo $no++;?></td>
                                    <td><?php echo $r['name'];?></td>
                                    <td><?php echo $r['earned_vote'];?></td>
                                    <td>
                                        <a href="?hitung=xx&id=<?php echo $r['id'];?>" >
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-default waves-effect waves-classic" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    </td>
                                </tr>
                                <?php 
                            }
                            ?>
                        </tbody>
                    </table>
                    <?php
                }elseif ($hitung == "xx") {

                     $q = $db->query("SELECT  earned_vote AS a  FROM candidates WHERE id = '".$id."'");
                     $x = $q->fetch_array();
                     $tot = $x['a'];
                    $count  = $tot + 1;


                    $db->query("UPDATE candidates set earned_vote = '".$count."'   where id     = '".$id."'");

                        ?>
                        <script>
                            window.location.href='soal6.php';
                        </script>
                        <?php
                }else{
                    ?>
                    <script>
                        alert("Mohon Klik Tombol Hitung ");
                        window.location.href='';
                    </script>
                    <?php
                    
                }
                ?>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
</html>
