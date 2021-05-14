<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Book Appointment</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            input[type=text]
            {
              width: 100%;
              margin-bottom: 15px;
              padding: 12px;
              border: 1px solid #0079EB ;
              border-radius: 5px;
              height: 40px;
            }
            input[type=email]
            {
              width: 100%;
              margin-bottom: 15px;
              padding: 12px;
              border: 1px solid #0079EB ;
              border-radius: 5px;
                height: 40px;
            }
            label
            {
                margin-left: 5px;
              margin-bottom: 10px;
              display: block;
                font-size: 20px;
                color: #292D87;        
            }
            select
            { 
              width: 100%;
              margin-bottom: 15px;
              padding: 6px;
              border: 1px solid #0079EB ;
              border-radius: 5px; 
                height: 30px;
            }
            .btn
            {
               float: right; 
            }
            .error
            {
                margin-left: 10px;
                font-size: 15px;
                margin-bottom: 10px;
            }
        </style>
        
    </head>
    <body style="background-image:url(images/appointment.jpg);">
        <?php include 'navbar.php'; ?>
         
        
            <div class="container-fluid" style="margin-top:10px;">
               
              <a href="menu.php"><input type="button" class="btn btn-primary" value="BACK"></a>  
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="list-group">
                        <div class="list-group-item" style="background-color:rgba(1, 132, 255,0.8);border-radius:10px; text-align:center;"><h4 style="color:#ffffff">Book An Appointment</h4></div>
                        <div class="list-group-item" style="margin-bottom:80px;background-color:rgba(220, 227, 233,0.3)">        
                            <form action="func.php" method="post" class="form-group">
                                <div class="row">
                                    <div class="col-md-1">
                                        <label>Id</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="text" id="idd" name="id" style="height:30px;" autocomplete="off">
                                        
                                    </div>
                                     
                                    <div class="col-md-2"></div>
                                    <div class="col-md-2">
                                    <label>Date</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="date">
                                    </div>                
                                </div>
                                <div id="id_error" class="error"></div>
                                <label> Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Shivam Lal" autocomplete="off" name="name">
                                <div id="name_error" class="error"></div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="aage" name="age" autocomplete="off" style="height:30px;">
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-2">
                                                <label>Sex</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="gender">
                                                    <option selected value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                <div id="age_error" class="error"></div>
                                <label> Address</label>
                                    <input type="text" id="address" class="form-control" placeholder="Patna" autocomplete="off" name="address">
                                <div id="address_error" class="error"></div>
                                <label>Contact</label>
                                    <input type="text" class="form-control" id="contact" placeholder="Contact" autocomplete="off" name="contact">
                                <div id="contact_error" class="error"></div>
                                <label> Email</label>
                                    <input type="email" id="email" class="form-control" placeholder="xyz@gmail.com" autocomplete="off" name="email">
                                <div id="email_error" class="error"></div>
                                <label>Doctor Appointed</label>
                                <select name="docapp">
                                    <option value="Dr Lal from 4pm to 6pm">Dr Lal from 4pm to 6pm</option>
                                    <option value="Dr Sharma from 6pm to 8pm">Dr Sharma from 6pm to 8pm</option>
                                    <option value="Dr Kumar from 8pm to 10pm">Dr Kumar from 8pm to 10pm</option>
                                </select>
                                <input type="submit" class="btn btn-primary" id="submit" name="pat_submit" value="Enter Appointment" style="width:100%; height:50px;">
                            </form>
                        </div>  
                    </div>
                </div>
                     <div class="col-md-3"></div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        
        <script type="text/javascript">
            
            
             $(document).ready(function(){
                 $('#id_error').hide();
                 $('#name_error').hide();
                 $('#age_error').hide();
                 $('#address_error').hide();
                 $('#contact_error').hide();
                 $('#email_error').hide();
                
                 
                 var id_err=true;
                 var name_err=true;
                 var age_err=true;
                 var address_err=true;
                 var contact_err=true;
                 var email_err=true;
                 
                 
                 $('#idd').keyup(function() {
                    
                     id_check();
                     
                     
                     
                 });
                 
                 function id_check() {
                     var id_val=$('#idd').val();
                     if(id_val == "") {
                         $('#id_error').show();
                         $('#id_error').html('Fill id');
                         $('#id_error').focus();
                          $('#id_error').css("color","red");
                         id_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#id_error').hide();
                         }
                     
                     if((id_val < 1) || (id_val > 200)) {
                         $('#id_error').show();
                         $('#id_error').html('Wrong Id');
                         $('#id_error').focus();
                          $('#id_error').css("color","red");
                         id_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#id_error').hide();
                         }
                     
                 }
                 
                 
                 $('#name').keyup(function() {
                    
                     name_check();
                     
                     
                     
                 });
                 
                 function name_check() {
                     var name_val=$('#name').val();
                     if(name_val == "") {
                         $('#name_error').show();
                         $('#name_error').html('Enter Name');
                         $('#name_error').focus();
                          $('#name_error').css("color","red");
                         name_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#name_error').hide();
                         }
                     
                     if((name_val.length <3) || (name_val.length >26)) {
                         $('#name_error').show();
                         $('#name_error').html('Name should be of 3 to 25 characters');
                         $('#name_error').focus();
                          $('#name_error').css("color","red");
                         name_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#name_error').hide();
                         }
            
                 }
                 
                 
                 
                 $('#aage').keyup(function() {
                    
                     age_check();
                       
                     
                 });
                 
                 function age_check() {
                     var age_val=$('#aage').val();
                     if(age_val == "") {
                         $('#age_error').show();
                         $('#age_error').html('Enter Age');
                         $('#age_error').focus();
                          $('#age_error').css("color","red");
                         age_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#age_error').hide();
                         }
                     
                     if((age_val < 1) || (age_val > 130)) {
                         $('#age_error').show();
                         $('#age_error').html('Enter valid age!');
                         $('#age_error').focus();
                          $('#age_error').css("color","red");
                         age_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#age_error').hide();
                         }
                    
                 }
                 
                 
                 
                 $('#address').keyup(function() {
                    
                     address_check();
                     
                     
                     
                 });
                 
                 function address_check() {
                     var address_val=$('#address').val();
                     if(address_val == "") {
                         $('#address_error').show();
                         $('#address_error').html('Address field is required!');
                         $('#address_error').focus();
                          $('#address_error').css("color","red");
                         address_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#address_error').hide();
                         }
                     
                     if((address_val.length < 3) || (address_val > 150)) {
                         $('#address_error').show();
                         $('#address_error').html('Address field should be of 4-150 characters!');
                         $('#address_error').focus();
                          $('#address_error').css("color","red");
                         address_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#address_error').hide();
                         }
                     
                        
                 }
                 
                 
                 $('#contact').keyup(function() {
                    
                     contact_check();
                     
                     
                     
                 });
                 
                 function contact_check() {
                     var contact_val=$('#contact').val();
                     if(contact_val == "") {
                         $('#contact_error').show();
                         $('#contact_error').html('Contact field is required!');
                         $('#contact_error').focus();
                          $('#contact_error').css("color","red");
                         contact_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#contact_error').hide();
                         }
                     
                     if((contact_val.length < 5) || (contact_val.length > 15)) {
                         $('#contact_error').show();
                         $('#contact_error').html('Enter a valid number');
                         $('#contact_error').focus();
                          $('#contact_error').css("color","red");
                         contact_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#contact_error').hide();
                         }
                    
                 }
                 
                 $('#email').keyup(function() {
                    
                     email_check();
                     
                     
                     
                 });
                 
                 function email_check() {
                     var email_val=$('#email').val();
                     if(email_val == "") {
                         $('#email_error').show();
                         $('#email_error').html('email field is required!');
                         $('#email_error').focus();
                          $('#email_error').css("color","red");
                         email_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#email_error').hide();
                         }
                     
                     if((email_val.length < 6) || (email_val.length > 50)) {
                         $('#email_error').show();
                         $('#email_error').html('Email should be of 6 - 50 characters!');
                         $('#email_error').focus();
                          $('#email_error').css("color","red");
                         email_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#email_error').hide();
                         }
                    
                 }
                 
                 
                 
          
            
            $('#submit').click(function(){
                  id_err=true;
                  name_err=true;
                  age_err=true;
                  address_err=true;
                  contact_err=true;
                  email_err=true;
                
                        id_check();
                        name_check();
                        age_check();
                        address_check();
                        contact_check();
                        email_check();
                
    
                
                if((id_err == true) && (name_err == true) && (age_err == true) && (address_err == true) && (contact_err == true) && (email_err == true) ) 
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