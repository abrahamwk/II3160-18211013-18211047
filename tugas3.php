<!DOCTYPE html>

<html>
<head>
 <title>PHP</title>
  <link href="StyleSheetTugas3.css" rel="stylesheet">
</head>

<body>
  <div id="main3">
  <h1>II3160 PEMROGRAMAN INTEGRATIF</h1>
  <h2>TUGAS 3 - Mengambil Web Service</h2>
  <h2>Abraham WK 18211013 / Ricky 18211047</h2>

   <?php

      //nf x = variabel untuk menyimpan uri dari tugas rekan kami

      $nf1 = "http://sti-itb.org/Progint-yogidanang/?kolom=basic";
      $nf2 = "http://sti-itb.org/18211014-dan-18211029/index2.php?state=state3&submit2=Submit";
      $nf3 = "http://sti-itb.org/II3160-Progin-18211002-18211033/getSelf.php/?input=1";
      $nf4 = "http://sti-itb.org/pemrograman_integratif/informasi_xml.php?nim=all";
      $nf5 = "http://sti-itb.org/18211010-18211035/searchmhs.php?tag=NIM&value=18211001";
      $nf6 = "http://sti-itb.org/II3160-Tugas-18211011-18211053/index.php/search/majalahs";
      $nf7 = "http://sti-itb.org/pemrograman-integratif/artis.php?dari=14&sampai=15";
      $nf8 = "http://sti-itb.org/progin-raosanfady/show.php/?id=all";
      $nf9 = "http://sti-itb.org/BernadetteVina/csv.php";
      $nf10 = "http://sti-itb.org/habib-andy/index.php/ws/menu/daerah/Jawa";
      
  
      
      for ($i=1; $i<16; $i++){

        $countnf="nf".$i;
        $x = "Tugas Milik : ".$$countnf; 
        echo "<h2> $x </h2>";
        $temp = simplexml_load_file($$countnf);
        if ($temp){
          if (count($temp) != 0){         
            echo "<table border=\"2\" cellpadding=\"2\">";
            foreach($temp->children()->children() as $child1){
              echo "<th>".$child1->getName()."</th>";
            }
            foreach($temp->children() as $child){
              echo "<tr>";
              foreach($child->children() as $child1){
                echo "<td>$child1</td>";
              }
              echo "</tr>";
            }       
            echo "</table>";
          }
          else {
            echo "Tidak Ada Informasi";
          }
          echo "<br>";
        }
      }
  ?>
 
  <p>
  <form action="index.php" method="get">
    <input type="submit" name="submit" value="KEMBALI" id="submit" />
  </form>
  </p>

  </div>

  

</body>
</html> 



