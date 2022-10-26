<form method="post" name="file" enctype="multipart/form-data">
    <div class="form-control"><input type="text"  name="table_name" ></div>
    <input type="submit" name="sub" value="import">
</form>
<?php

        $link = mysqli_connect("77.245.159.97", "feyzaer1_mivento", "H@#8p6t;NZA=", "feyzaer1_mivento");

        if($link === false){
            die("ERROR: Could not connect. " . $link->connect_error);
        }

        $fileName = $_POST["table_name"];


// Attempt create table query execution
        $sql = "CREATE TABLE $fileName(
            employee_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
            name_ VARCHAR(30),
            surname VARCHAR(30) ,
            email VARCHAR(70),
            points VARCHAR(10),
            phone VARCHAR(10)
)";
        if (mysqli_query($link, $sql)) {
            echo "Table created successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

// Close connection
        mysqli_close($link);

?>


