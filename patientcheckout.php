<!DOCTYPE html>
<?php include('func.php'); ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
        <title>Patient Check-Out</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Patient Check-Out</title>
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
                background-image: url(images/checkout1.jpeg);
                background-size: cover;
                
            }
            label
            {
                margin-bottom: 5px;
                  display: block;
                    float: left;
                color:#000000 ;
            }
            input[type=text]
            {
              width: 100%;
              margin-bottom: 5px;
              padding: 12px;
              border: 1px solid #0079EB ;
              border-radius: 5px;
              height: 40px;
            }
            input[type=date]
            {
              width: 100%;
              margin-bottom: 5px;
              padding: 12px;
              border: 1px solid #0079EB ;
              border-radius: 5px;
              height: 40px;
            }
            .btn {
                 
                  color: white;
                  padding: 12px;
                  margin-left: 130px;;
                  border: none;
                  width: 40%;
                  border-radius: 3px;
                  cursor: pointer;
                  font-size: 17px;
                }

               

        
        
        </style>
    
    </head>
    <body>
       <?php include("navbar.php"); ?> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-4">
                    <div class="list-group">
                        <div class="list-group-item" style="background-color:rgba(1, 132, 255,1);border-radius:10px; text-align:center;"><h4 style="color:#ffffff">Patient Check-Out</h4></div>
                        <div class="list-group-item" style="margin-bottom:80px;background-color:rgba(220, 227, 233,0.7)">
                            <form action="func.php" method="post" class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Reg Id</label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" id="regidd" name="regid" class="form-group" placeholder="301" autocomplete="off" style="width:40%; height:25px;">
                                    </div>
                                
                                </div>
                                <div id="id2_error" class="error"></div>
                                <label> Full Name</label>
                                    <input type="text"  class="form-control" id="name2" placeholder="Shivam Lal" autocomplete="off" name="name">
                                <div id="name2_error" class="error"></div>
                                <label>Contact</label>
                                    <input type="text" class="form-control" id="contact2" placeholder="Contact" autocomplete="off" name="contact">
                                <div id="contact2_error" class="error"></div>
                                <label>Date of Checking-In</label>
                                <input type="date" class="form-control" name="admitdate" id="checkindate" style="border-color:#0070FF ;">
                                <label>Date of Checking-Out</label>
                                <input type="date" class="form-control" name="admitdate" id="checkoutdate" style="border-color:#0070FF ;">
                                <label>Amount to be paid:</label>
                                <input type="text" class="form-control" name="amount" id="checkout_submit" style="border-color:#0070FF ; "placeholder="10000.00">
                            </form>
                            <a href="payment.php"><button class="btn btn-primary">Make Payment</button></a>
                            <button class="btn btn-primary" name="checkout" id="checkout" style="margin-top:10px; width:100%;margin-left:0px;"><a href="checkout.php">Check-Out</a></button>
                           
                        
                        
                        </div>
                        
                        
                        
                    
                    </div>
                         
                
                
                
                </div>
            
            </div>
        
        
        
        
        </div>
        
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        
        <script type="text/javascript">
            
            $(document).ready(function(){
                 $('#id2_error').hide();
                 $('#name2_error').hide();
                 $('#contact2_error').hide();
                
                
                 
                 var id2_err=true;
                 var name2_err=true;
                 var contact2_err=true;
                 
                 
                 
                 $('#regidd').keyup(function() {
                    
                     id2_check();
                     
                     
                     
                 });
                 
                 function id2_check() {
                     var id2_val=$('#regidd').val();
                     if(id2_val == "") {
                         $('#id2_error').show();
                         $('#id2_error').html('**Fill id');
                         $('#id2_error').focus();
                          $('#id2_error').css("color","red");
                         id2_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#id2_error').hide();
                         }
                     
                     if((id2_val < 1) || (id2_val > 200)) {
                         $('#id2_error').show();
                         $('#id2_error').html('**Wrong Id');
                         $('#id2_error').focus();
                          $('#id2_error').css("color","red");
                         id2_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#id2_error').hide();
                         }
                     
                 }
                 
                 
                 $('#name2').keyup(function() {
                    
                     name2_check();
                     
                     
                     
                 });
                 
                 function name2_check() {
                     var name2_val=$('#name2').val();
                     if(name2_val == "") {
                         $('#name2_error').show();
                         $('#name2_error').html('** Enter Name');
                         $('#name2_error').focus();
                          $('#name2_error').css("color","red");
                         name2_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#name2_error').hide();
                         }
                     
                     if((name2_val.length <3) || (name2_val.length >26)) {
                         $('#name2_error').show();
                         $('#name2_error').html('Name should be of 3 to 25 characters');
                         $('#name2_error').focus();
                          $('#name2_error').css("color","red");
                         name2_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#name2_error').hide();
                         }
            
                 }
                 
        
                 $('#contact2').keyup(function() {
                    
                     contact2_check();
                                          
                 });
                 
                 function contact2_check() {
                     var contact2_val=$('#contact2').val();
                     if(contact2_val == "") {
                         $('#contact2_error').show();
                         $('#contact2_error').html('** Contact field is required!');
                         $('#contact2_error').focus();
                          $('#contact2_error').css("color","red");
                         contact2_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#contact2_error').hide();
                         }
                     
                     if((contact2_val.length < 5) || (contact2_val.length > 15)) {
                         $('#contact2_error').show();
                         $('#contact2_error').html('** Enter a valid number');
                         $('#contact2_error').focus();
                          $('#contact2_error').css("color","red");
                         contact2_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#contact2_error').hide();
                         }
                    
                 }
                 
                 
                 
                 
          
            
            $('#checkout_submit').click(function(){
                  id2_err=true;
                  name2_err=true;
                  contact2_err=true;
                  
                
                        id2_check();
                        name2_check(); 
                        contact2_check();
                       
                
    
                
                if((id2_err == true) && (name2_err == true)  && (contact2_err == true)  ) 
                    {
                        return true;
                        
                    }
                else
                    {
                        return false;
                    }
                
                
            });
            
        }); 
            
        
        
        </script>
        
        
        
    
    
    </body>


</html>