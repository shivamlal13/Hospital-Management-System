<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Patient Details</title>
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
          body 
            {
              font-family: Arial;
              font-size: 17px;
            }
    </style>
    </head>
    <body>
    
         <?php include 'navbar.php'; ?>

             <div class="container-fluid">
                 <div class="container-fluid">
                 
                     <div class="row" style="background-color:rgba(1, 132, 255,1);border-radius:5px; padding-top:10px; padding-bottom:10px;">
                         <div class="col-md-1">
                            <a href="menu.php" class="btn btn-light">Back</a>
                         </div>
                         <div class="col-md-2"><h4 style="color:#ffffff; font-weight:bold; margin-left:10px;" >Patient Details</h4></div>
                         <div class="col-md-1"></div>
                         <div class="col-md-4">
                            <input type="text" name="search" id="search" class="form-control" placeholder="Enter Name" autocomplete="off" onkeyup="searchFun()">
                         </div>
                         <div class="col-md-1"></div>
                         <div class="col-md-2">
                                   
                          <a href="">  <i class="fa fa-trash" aria-hidden="true" style="margin-top:10px; font-size:20px; float:right; color:#ffffff;"></i></a>
                                </div>
                         
          
                    </div>
                     </div>
                 
                     
                 <table class="table table-striped table-hover" id="myTable">
                      <thead  style="text-align:center; color:rgb(99, 49, 244 )">
                        <tr>

                          <th scope="col">Id</th>
                          <th scope="col">Date</th>
                          <th scope="col">Name</th>
                          <th scope="col">Age</th>
                          <th scope="col">Gender</th>
                          <th scope="col">Address</th>
                          <th scope="col">Contact</th>
                          <th scope="col">Email</th>
                          <th scope="col">Doctor Appointed</th>
                          <th scope="col"><i class="fa fa-trash" aria-hidden="true"></i></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php get_patient_details();  ?>
                      </tbody>
                 </table>   
             </div>   
        <script type="text/javascript">
            const searchFun = () => {
                let filter = document.getElementById('search').value.toUpperCase();
                let myTable = document.getElementById('myTable');
                let tr = myTable.getElementsByTagName('tr');
                for(var i=0;i<tr.length;i++)
                    {
                        let td = tr[i].getElementsByTagName('td')[2];
                        if(td)
                            {
                                let textvalue=td.textContent || td.innerHTML;
                                
                                if(textvalue.toUpperCase().indexOf(filter) > -1)
                                    {
                                        tr[i].style.display = "";
                                    }
                                else
                                    {
                                        tr[i].style.display = "none";
                                    }
                            }
                    }
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>