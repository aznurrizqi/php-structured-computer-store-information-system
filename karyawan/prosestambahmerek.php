<?php  
    include "../koneksi.php";  
    
/*    $query = mysql_query("select * from barang order by idbrg desc limit 1");
        
    if(mysql_num_rows($query) == 0){
        $jmlNol = "0001";
    }
    else{
        $hasil = mysql_fetch_array($query);
        $id = substr($hasil['idbrg'],1);
        $tambah = $id+1;
        $nol = strlen($id) - strlen($tambah);
        $jmlNol = "";
            
        if($nol < strlen($id) && $nol >= 0){
            for($i=0;$i<$nol;$i++){
                $jmlNol .= "0";
            }
        
            $jmlNol .= $tambah;
        }        
    }*/
 
    $idmerek = strtoupper(addslashes (strip_tags ($_POST['idmerek'])));  
    $nmmerek = strtoupper(addslashes (strip_tags ($_POST['nmmerek'])));  

    $query = "INSERT INTO merek VALUES ('$idmerek','$nmmerek')";  
    $sql = mysql_query ($query) or die (mysql_error());  
    
    if ($sql) {  
            echo"<script>alert('Data Merek telah berhasil ditambahkan !',document.location.href='indexmerek.php')</script>";  
    } else {  
            echo"<script>alert('Data Merek gagal ditambahkan !',document.location.href='indexmerek.php')</script>";  
    }  
?>  
