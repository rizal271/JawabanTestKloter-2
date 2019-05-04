<?php 
    $hrfkcl          = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','y'];
    $hrfbsr          = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    $angka                = ['1','2','3','4','5','6','7','8','9','0'];
    $karakter_spesial     = ['`','~','!','@','#','$','%','^','&','*','(',')','_','-','=','+','{','}','[',']','|','\'','"','"',';',':','/','?','.','>','<',',','\\'];    
    $username             = 'sumedang';
    $password             = '41j4l2_R';
    function is_username_valid($username){
        global $hrfkcl;
        $split_username     = str_split($username);
        $cek_hurufkecil     = 0;
        $cek_underscore     = 0;
        $cek_jumlahkarakter = 0;
        
        foreach ($split_username as $baris_nama) {
            foreach ($hrfkcl as $lowCase) {
                if($baris_nama == $lowCase){
                    $cek_hurufkecil += 1;
                }
            }
                if($baris_nama == "_"){
                   $cek_underscore += 1;
                }
        }
        if(count($split_username) == 8){
                   $cek_jumlahkarakter += 1;
        }
        if($cek_hurufkecil > 0 && $cek_jumlahkarakter > 0){
            return true;
        }else {
            return false;
        }
    }
    function is_password_valid($password){
        global $hrfkcl, $hrfbsr, $angka, $karakter_spesial;
        $split_password     = str_split($password);
        $cek_hurufkecil     = 0;
        $cek_hurufbesar     = 0;
        $cek_angka          = 0;
        $cek_karakterspesial= 0;
        $cek_jumlahkarakter = 0;
            foreach ($split_password as $baris_password) {
                foreach ($hrfkcl as $lowCase) {
                    if($baris_password == $lowCase){
                        $cek_hurufkecil += 1;
                    }
                }
                foreach ($hrfbsr as $upCase) {
                    if($baris_password == $upCase) {
                        $cek_hurufbesar += 1;
                    }
                }
                foreach ($angka as $num) {
                    if($baris_password == $num){
                         $cek_angka += 1;
                    }
                }
                foreach ($karakter_spesial as $symbol) {
                    if($baris_password == $symbol){
                        $cek_karakterspesial += 1;
                    }
                }
            }
                if(count($split_password) == 8){
                        $cek_jumlahkarakter += 1;
                }
                if($cek_hurufkecil > 0 && $cek_hurufbesar > 0 && $cek_angka > 0 && $cek_karakterspesial > 0 && $cek_jumlahkarakter > 0){
                    return true;
                }else{
                    return false;
                }
    }
    $username = is_username_valid($username);
    $password = is_password_valid($password);
    if($username == true && $password == true){
        echo "Selamat !!! Username telah memiliki kombinasi dari huruf kecil dan underscore. Dengan panjang 8 karakter dan password
        juga sudah memiliki kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang 8 karakter";
    }else if($username == true && $password == false){
        echo "Mohon Maaf !!! Password juga belum memiliki kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang 8 karakter";
    }else if($username == false && $password == true){
        echo "Mohon Maaf !!! Username belum memiliki kombinasi dari huruf kecil dan underscore. Dengan panjang 8 karakter";
    }else if($username == false && $password == false){
        echo "Mohon Maaf !!! Username belum memiliki kombinasi dari huruf kecil dan underscore. Dengan panjang 8 karakter dan password
        juga belum memiliki kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang 8 karakter";
    }
?>