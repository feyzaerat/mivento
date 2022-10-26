<!doctype html>
<html lang="en">
<head>
    <?php require 'includes/head.php'; ?>
    <?php require 'database.php'; ?>
</head>
<body id="body-pd">
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
</header>
<?php require 'includes/navbar.php'; ?>
<!--Container Main start-->
<div class="bg-light">
    <div class="container">
        <!--Form Row-->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="card box-shadow mx-auto my-2 upload-card " >
                    <div class="card-body">
              <!--CSV Import From Start-->
                        <form method="post" name="file" enctype="multipart/form-data" >
                            <div class="d-flex">
                                <div class="float-start">
                                    <div class="form-group">
                                        <input type="file" name="file" id="file" class="input-file " style="display: none">
                                        <label for="file" class="btn btn-upload-label js-labelFile">
                                            <i class="icon fa fa-upload"></i>
                                            <span class="js-fileName">Upload a File</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="float-end">
                                    <div class="form-group text-center">
                                        <input type="submit" class="submit" name="submit" value="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
              <!--CSV Import From End-->
                    </div>
                </div>
            </div>
        </div>
        <!--DataTabLe Row Start-->
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="card box-shadow mx-auto my-2 data-card table-responsive" >
                <!--CSV Data List Start-->
                    <table class="table table-striped table-responsive table-borderless mt-1" id="table_id">
                        <thead>
                           <tr>
                              <th>id</th>
                              <th>name</th>
                              <th>surname</th>
                              <th>email</th>
                              <th>points</th>
                              <th>phone</th>
                           </tr>
                        </thead>
                        <tbody id="table_data">
                           <?php if(mysqli_num_rows($displayData)>0){
                             foreach ($displayData as $row){
                                 echo '
                                  <tr>
                                      <td>'.$row["employee_id"].'</td>
                                      <td>'.$row["name_"].'</td>
                                      <td>'.$row["surname"].'</td>
                                      <td>'.$row["email"].'</td>
                                      <td>'.$row["points"].'</td>
                                      <td>'.$row["phone"].'</td>
                                  </tr>
                                      '; }}?>
                        </tbody>
                    </table>
                <!--CSV Data List End-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--Container Main end-->
<?php require 'includes/footer.php'; ?>
</body>
</html>
