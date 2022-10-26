<?php

/********DB Connection******/
        $db = mysqli_connect("77.245.159.97","feyzaer1_mivento",'H@#8p6t;NZA=',"feyzaer1_mivento");
           if(mysqli_connect_error()){
                    echo "Failed to connect to DB : ". mysqli_connect_error();
                }
/********DB Connection******/


/********import CSV******/
  if(isset($_POST["submit"])){
      $fileName = $_FILES["file"]["tmp_name"];

      if($_FILES["file"]["size"] > 0){
          $file = fopen($fileName, "r");

          while ($row = fgetcsv($file, 10000, ';')) {
              $value = "'" . implode("','", $row) . "'";
              $insert = "INSERT INTO csv(name_,surname,email,points,phone) VALUES (" . $value . ")";
              $result = mysqli_query($db, $insert);
          }
      }
  }

  if(!empty($result)){
      echo "success";
  }
/********import CSV******/


/********Display Data******/
  $getData = "SELECT * FROM csv ORDER BY employee_id ASC";
  $displayData = mysqli_query($db,$getData);
/********Display Data******/

?>