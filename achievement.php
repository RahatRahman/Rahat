<?php 
 include_once 'include/header.php';
 include 'classes/Superadmin.php';
 $obj_sup = new Superadmin();
 
  $statment=$obj_sup->view_all_member_name();

  if (isset($_POST['btn'])) {
    // print_r($_POST);
    $statment=$obj_sup->save_all_achievement($_POST);
  }

 ?>

     <!-- header-starts -->
    
    <!-- //header-ends -->
    <!-- main content start-->
    <div id="page-wrapper">
      <div class="main-page">
        <h3 class="title1">Achievements</h3>
        <div class="blank-page widget-shadow scroll" id="style-2 div1">
          
<div class="form-group row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <h3>Add New Achievement</h3>
    </div>
    <div class="col-sm-4 text-right">
          <a class="btn btn-primary" href="all_achievement.php" role="button">Back</a>
        </div>
  </div>


  

  <div class="container">

    <div class="form-group row">
      <div class="col-sm-4">
        <h4>Achievement Information:</h4>
      </div>
    </div>
    <form action="" method="post">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Employee</label>
        <div class="col-sm-4">
          <select class="form-control" name="employee">
            <option selected>Select Employee</option>
            <?php while($row = $statment->fetch(PDO::FETCH_ASSOC)){?>  
            <option ><?php echo $row['fullName'];?></option> 
            <?php }?> 
          </select>
        </div>
      </div>


       

      <div class="form-group row">
        <label for="Cname" class="col-sm-2 col-form-label">Achievement Title</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="Cname" name="achievementTitle" placeholder="Achievement Title">
        </div>
      </div>

      <div class="form-group row">
        <label for="Dob" class="col-sm-2 col-form-label">Achievement Date</label>
        <div class="col-sm-4">
          <input type="Date" class="form-control" name="achievementDate" id="Dob">
        </div>
      </div>

      

      

      <div class="form-group row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4">
          <input class="btn btn-primary btn-block" type="submit" name="btn" value="Submit">
        </div>
      </div>

      

    </form>
  </div>

        </div>
      </div>
    </div>
    <!--footer-->
   <?php include_once 'include/footer.php'; ?>