<?php 

function ortHesapla($vize1, $vize2, $final) {
    $ort=($vize1*0.3 +$vize2*0.3 +$final*0.4) ;
    
    if ($ort >= 85){
      
        ?> <h1>Kazandı</h1> <?php
      echo "'In geçer notu"  .$ort. ":AA'dır." ;
    }
    else if($ort >=70 && $ort<=80){
        echo "'In notu ".$ort. ":BB'dır." ;
    }
    else if($ort >=60 && $ort<=69){
        echo "'In notu ".$ort. ":CC'dır." ;
    }
    else if($ort >=50 && $ort<=59){
        echo "'In notu ".$ort. ":DD'dır." ;
    }
    else if($ort >=0 && $ort<=49){
        ?> <h1>Kazanamadı <?php echo "'In notu ".$ort. ":FF'dır." ; ?> </h1> <?php 
   
    }
}

?>

<h2>Geçti Kaldı Formu</h2>

<form action="" method="post">
  <label for="fname">isim:</label><br>
  <input type="text" id="fname" name="fname" value="İsim"><br>
  <label for="lname">Soyisim:</label><br>
  <input type="text" id="soyad" name="soyad" value="soyad"><br>
  <label for="lname">vize1:</label><br>
  <input type="text" id="vize1" name="vize1" value="vize1"><br>
  <label for="lname">vize2:</label><br>
  <input type="text" id="vize2" name="vize2" value="vize2"><br>
  <label for="lname">Final:</label><br>
  <input type="text" id="final" name="final" value="final"><br><br>
  <input type="submit" value="Submit">
  
</form> 

<?php 
echo $_POST['fname']." ".$_POST['soyad'];
 ortHesapla($_POST['vize1'],$_POST['vize2'],$_POST['final']);

 ?>



