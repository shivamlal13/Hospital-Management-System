<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Menu</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <style type="text/css">
         .collapse
          {
          margin-right:60px;
          }
          a:hover
          {
              background-color: rgba(205, 208, 222 ,0.5);
              
          }
         
          
          .nav-item
          {
              margin-right: 10px;
              font-weight: bolder;
              color: floralwhite;
          } 
          .list-group-item
          {
              background-color:rgba(236, 237, 242,0.5);
              text-align: center;
              border-style: groove;
              border-color: rgba(0, 127, 247,0.5);
          }
      </style>
    </head>
    
    <body>
         <?php include 'navbar.php'; ?>
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-3" style="margin-top:30px;">
                <div class="list-group" style="width:80%;margin-left:30px;">
                   <h4 class="list-group-item active" style="text-align:center; border-radius:100%;">Menu</h4>
                    <a href="bookappointment.php" class="list-group-item" style="font-size:20px;text-decoration:none">Book an Appointment</a>
                    <a href="patientdetails.php" class="list-group-item" style="font-size:20px;text-decoration:none">Patient Details</a>
                    <a href="patientcheckin.php" class="list-group-item" style="font-size:20px;text-decoration:none">Patient Check-In</a>
                    <a href="patientcheckedin.php" class="list-group-item" style="font-size:20px;text-decoration:none">Checked-In Details</a>
                    <a href="patcheckout.php" class="list-group-item" style="font-size:20px;text-decoration:none">Patient Check-out</a>
                    <a href="addstaff.php" class="list-group-item" style="font-size:20px;text-decoration:none">Add a Staff</a>
                    <a href="staffdetails.php" class="list-group-item" style="font-size:20px;text-decoration:none">Staff Details</a>
                    
                    <a href="removestaff.php" class="list-group-item" style="font-size:20px;text-decoration:none">Remove a Staff</a>
                    <a href="" class="list-group-item" style="font-size:20px;text-decoration:none">Payment</a>
                </div>
                
            </div>
           
            <div class="col-md-8" style="background:cover;margin-top:0px;"> 
                <img src="images/menu1.jpg">
            </div>
            </div>
            </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>