
<?php

$state_csv =false;
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

          while (($row = fgetcsv($file, 10000, ';')) !== FALSE ){
              $value = "'" . implode("','", $row) . "'";
              $insert = "INSERT INTO csv(name_,surname,email,points,phone) VALUES (" . $value . ")";
              $result = mysqli_query($db, $insert);

          }

          /*success alert*/
          if($result) {
              echo "
             <div class='alert-success' class='close-btn-success'> Success ! File imported...</div>
             <button id='close-btn' class='close-btn-success'>X</button>
             ";
             }
          /*error alert*/
          else
          {  echo "
             <div class='alert-danger'> Failed ! Something went wrong...</div>
             <button id='close-btn' class='close-btn-danger'>X</button>
             ";
          }
      }
  }


/********import CSV******/


/********Display Data******/
  $getData = "SELECT * FROM csv ORDER BY employee_id ASC";
  $displayData = mysqli_query($db,$getData);
/********Display Data******/

?>