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

      $nf1 = "http://localhost/habib-andy/index.php/ws/menu/semua";
      $nf2 = "http://localhost/II3160-18211017-18211043/database_collection/xmldb.xml";
      $nf3 = "http://localhost/BernadetteVina/csv.php";
      $nf4 = "http://localhost/II3160-18211003-18211050/menu.xml";
      $nf5 = "http://localhost/II3160--Pemrograman-Integratif-/DaftarIdol.xml";
      $nf6 = "http://localhost/II3160-Tugas1-Tugas2/tab2.xml";
      $nf7 = "http://localhost/IPT-Assignments/data2.xml";
      $nf8 = "http://localhost/pemrograman_integratif/output.xml";
      $nf9 = "http://localhost/Pemrograman-Intergratif/dbxml.xml";
      $nf10 = "http://localhost/progin/contoh.xml";
      $nf11 = "http://localhost/Progint/data/xml/1.xml";
      $nf12 = "http://localhost/BernadetteVina/DataXML.xml";
      $nf13 = "http://localhost/testPHP2/test.xml";
      $nf14 = "http://localhost/tugas-2-pemrograman-integratif/data3.xml";
      $nf15 = "http://localhost/web-service/datasiswa.xml";
      
  
      
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



