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

      $nf1 = "http://localhost/Rekan/habib-andy/index.php/ws/menu/semua";
      $nf2 = "http://localhost/Rekan/II3160-18211017-18211043/index.php/Api/xml_from_csv_get";
      $nf3 = "http://localhost/Rekan/BernadetteVina/csv.php";
      $nf4 = "http://localhost/Rekan/II3160-18211003-18211050/menu.xml";
      $nf5 = "http://localhost/Rekan/II3160--Pemrograman-Integratif-/DaftarIdol.xml";
      $nf6 = "http://localhost/Rekan/II3160-Tugas1-Tugas2/tab2.xml";
      $nf7 = "http://localhost/Rekan/IPT-Assignments/data2.xml";
      $nf8 = "http://localhost/Rekan/pemrograman_integratif/output.xml";
      $nf9 = "http://localhost/Rekan/Pemrograman-Intergratif/dbxml.xml";
      $nf10 = "http://localhost/Rekan/progin/contoh.xml";
      $nf11 = "http://localhost/Rekan/Progint/data/xml/1.xml";
      $nf12 = "http://localhost/a/BernadetteVina/DataXML.xml";
      $nf13 = "http://localhost/a/testPHP2/test.xml";
      $nf14 = "http://localhost/a/tugas-2-pemrograman-integratif/data3.xml";
      $nf15 = "http://localhost/a/web-service/datasiswa.xml";
      $nf16 = "http://localhost/a/Workspace/Menu.xml";
      $nf17 = "http://localhost/a/Protif/Protif/database/rumah.xml";
  
      
      for ($i=1; $i<18; $i++){

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
            echo "Data Kosong";
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



