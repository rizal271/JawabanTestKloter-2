 <?php 
 $kolom      = 3;
 $baris      = 4;
 $huruf   = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
 function cetakhuruf($kolom, $baris){
 	global $huruf;
 	$no = 0;
 	for($i = 0; $i < $baris;$i++){
 		for($j = 0; $j < $kolom;$j++){
 			$num = $no++;
 			foreach ($huruf as $xx => $value) {
 				if($xx == $num){
 					echo $value." ";
 				}
 			}
 		}
 		echo "<br>";
 	}
 }

 echo cetakhuruf($kolom, $baris);
 ?>