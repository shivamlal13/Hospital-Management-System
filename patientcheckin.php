<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
        <title>Patient Check-in</title>
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
              background-color: #FCFCFC ;
                 
            }
            label
            {
                margin-bottom: 10px;
                  display: block;
                    float: left;
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
                margin-right: 15px;
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
              padding-left: 10px;
              border: 1px solid #0079EB ;
              border-radius: 5px; 
                height: 35px;
            }
            .error
            {
                margin-left: 10px;
                font-size: 15px;
                margin-bottom: 10px;
            }
            .container-fluid
            {
                margin-left: 20px;
            }
        </style> 
    </head>
    <body>
         <?php include 'navbar.php';  ?>  
            
      
            <div class="container-fluid">
                  <img src="images/emergency.jpg" style="margin-bottom:10px;border-radius:100%;">
                
                <div class="row">
                    <div class="col-md-3"><a href="menu.php"><button class="btn btn-primary" style="margin-top:0px;">Back</button></a></div>
                
            <div class="col-md-6" style="margin-left:20px;">
                <div class="list-group">
                    <div class="list-group-item" style="background-color:rgba(1, 132, 255,0.8);border-radius:10px; text-align:center;"><h4 style="color:#ffffff">Patient Check-In</h4>
                </div>
                    <div class="list-group-item" style="margin-bottom:80px;background-color:rgba(220, 227, 233,0.1)">
                        <form action="func.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Reg Id</label>
                                    <input type="text" name="regid" placeholder="102" id="idd1" class="form-group" autocomplete="off" style="width:20%;">
                                </div>
                                <div class="col-md-6">
                                    <label>Date</label>
                                    <input type="date" name="date1" id="date1" class="form-group" autocomplete="off">
                                </div>
                            </div>
                            <div id="id1_error" class="error"></div>
                                <label>Full Name</label>
                                    <input type="text" class="form-control" id="name1" placeholder="Shivam Lal" autocomplete="off" name="pat_name">
                                <div id="name1_error" class="error"></div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <label>Age</label>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="text" class="form-control" id="aage1" name="pat_age" autocomplete="off" style="height:30px;">
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-2">
                                                <label>Sex</label>
                                            </div>
                                            <div class="col-md-3">
                                                <select name="pat_gender">
                                                    <option selected value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                <div id="age1_error" class="error"></div>
                                <label> Address</label>
                                    <input type="text" id="address1" class="form-control" placeholder="Patna" autocomplete="off" name="pat_address">
                                <div id="address1_error" class="error"></div>
                                <label>Contact</label>
                                    <input type="text" class="form-control" id="contact1" placeholder="Contact" autocomplete="off" name="pat_contact">
                                <div id="contact1_error" class="error"></div>
                                <label> Disease</label><small class="text-muted">If NO, then please specify NO</small>
                                    <input type="text" id="disease" class="form-control" placeholder="Dengue, Malaria, Cancer...." autocomplete="off" name="pat_disease">
                            
                                <div id="disease_error" class="error"></div>
                                <label>Observation Under</label>
                                <select name="dr_obser">
                                    <option value="Dr RN Singh">Dr RN Singh</option>
                                    <option value="Dr TR BPN">Dr TR BPN</option>
                                    <option value="Dr Umesh">Dr Umesh</option>
                                    <option value="Dr Lal">Dr Lal</option>
                                    <option value="Dr Kumar">Dr Kumar</option>         
                                </select>
                                <div class="row">
                                <div class="col-md-4">
                                <label>Building</label>
                                </div>
                                <div class="col-md-7">
                                    <select name="building">
                                        <option value="Maurya">Maurya</option>
                                        <option value="Magadha">Magadha</option>
                                        <option value="Vijaynagara">Vijaynagara</option>
                                        <option value="Kaveri">Kaveri</option>
                                        <option value="Ganga">Ganga</option>   
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Ward</label>
                                </div>
                                <div class="col-md-4">
                                    <select name="ward">
                                        <option selected>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Room No</label>
                                </div>
                                <div class="col-md-4">
                                    <select name="roomno">
                                        <option selected>101</option>
                                        <option>102</option>
                                        <option>103</option>
                                        <option>201</option>
                                        <option>202</option>
                                        <option>203</option>
                                        <option>301</option>
                                        <option>302</option>
                                        <option>303</option>
                                    </select>
                                </div>    
                            </div>
                            
                            <div class="row">
                                <div class="col-md-1">
                                    <input type="checkbox" name="checkbox" checked>
                                </div>
                                <div class="col-md-11">
                                    <p>I hereby declare that all the information provided by me are true and genuine.</p>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" id="submit1" name="pat1_submit" value="Submit" style="width:100%; height:50px; margin-top:0px;">
                        </form>
                    </div>
            </div>
            </div>
                <div class="col-md-3">

                </div><!--
                    <div class="col-md-1">
                         <a href="menu.php"><button class="btn btn-primary" style="margin-top:0px; float:right">Back</button></a>
                         
                    </div>-->
                </div>
                
            </div>
            
       
        
        
        
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
            
            
             $(document).ready(function(){
                 $('#id1_error').hide();
                 $('#name1_error').hide();
                 $('#age1_error').hide();
                 $('#address1_error').hide();
                 $('#contact1_error').hide();
                 $('#disease_error').hide();
                
                 
                 var id1_err=true;
                 var name1_err=true;
                 var age1_err=true;
                 var address1_err=true;
                 var contact_err=true;
                 var disease_err=true;
                 
                 
                 $('#idd1').keyup(function() {
                    
                     id1_check();
                     
                     
                     
                 });
                 
                 function id1_check() {
                     var id1_val=$('#idd1').val();
                     if(id1_val == "") {
                         $('#id1_error').show();
                         $('#id1_error').html('Fill id');
                         $('#id1_error').focus();
                          $('#id1_error').css("color","red");
                         id1_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#id1_error').hide();
                         }
                     
                     if((id1_val < 1) || (id1_val > 200)) {
                         $('#id1_error').show();
                         $('#id1_error').html('Wrong Id');
                         $('#id1_error').focus();
                          $('#id1_error').css("color","red");
                         id1_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#id1_error').hide();
                         }
                     
                 }
                 
                 
                 $('#name1').keyup(function() {
                    
                     name1_check();
                     
                     
                     
                 });
                 
                 function name1_check() {
                     var name1_val=$('#name1').val();
                     if(name1_val == "") {
                         $('#name1_error').show();
                         $('#name1_error').html('Enter Name');
                         $('#name1_error').focus();
                          $('#name1_error').css("color","red");
                         name1_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#name1_error').hide();
                         }
                     
                     if((name1_val.length <3) || (name1_val.length >26)) {
                         $('#name1_error').show();
                         $('#name1_error').html('Name should be of 3 to 25 characters');
                         $('#name1_error').focus();
                          $('#name1_error').css("color","red");
                         name1_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#name1_error').hide();
                         }
            
                 }
                 
                 
                 
                 $('#aage1').keyup(function() {
                    
                     age1_check();
                       
                     
                 });
                 
                 function age1_check() {
                     var age1_val=$('#aage1').val();
                     if(age1_val == "") {
                         $('#age1_error').show();
                         $('#age1_error').html('Enter Age');
                         $('#age1_error').focus();
                          $('#age1_error').css("color","red");
                         age1_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#age1_error').hide();
                         }
                     
                     if((age1_val < 1) || (age1_val > 130)) {
                         $('#age1_error').show();
                         $('#age1_error').html('Enter valid age!');
                         $('#age1_error').focus();
                          $('#age1_error').css("color","red");
                         age1_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#age1_error').hide();
                         }
                    
                 }
                 
                 
                 
                 $('#address1').keyup(function() {
                    
                     address1_check();
                     
                     
                     
                 });
                 
                 function address1_check() {
                     var address1_val=$('#address1').val();
                     if(address1_val == "") {
                         $('#address1_error').show();
                         $('#address1_error').html('Address field is required!');
                         $('#address1_error').focus();
                          $('#address1_error').css("color","red");
                         address1_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#address1_error').hide();
                         }
                     
                     if((address1_val.length < 3) || (address1_val > 150)) {
                         $('#address1_error').show();
                         $('#address1_error').html('Address field should be of 4-150 characters!');
                         $('#address1_error').focus();
                          $('#address1_error').css("color","red");
                         address1_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#address1_error').hide();
                         }
                     
                        
                 }
                 
                 
                 $('#contact1').keyup(function() {
                    
                     contact1_check();
                     
                     
                     
                 });
                 
                 function contact1_check() {
                     var contact1_val=$('#contact1').val();
                     if(contact1_val == "") {
                         $('#contact1_error').show();
                         $('#contact1_error').html('Contact field is required!');
                         $('#contact1_error').focus();
                          $('#contact1_error').css("color","red");
                         contact1_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#contact1_error').hide();
                         }
                     
                     if((contact1_val.length < 5) || (contact1_val.length > 15)) {
                         $('#contact1_error').show();
                         $('#contact1_error').html('Enter a valid number');
                         $('#contact1_error').focus();
                          $('#contact1_error').css("color","red");
                         contact1_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#contact1_error').hide();
                         }
                    
                 }
                 
                 $('#disease').keyup(function() {
                    
                     disease_check();
                     
                     
                     
                 });
                 
                 function disease_check() {
                     var disease_val=$('#disease').val();
                     if(disease_val == "") {
                         $('#disease_error').show();
                         $('#disease_error').html('Disease field is required!');
                         $('#disease_error').focus();
                          $('#disease_error').css("color","red");
                         disease_err=false;
                         return false;
                         
                         
                     }
                     else
                         {
                             $('#disease_error').hide();
                         }
                     
                     if((disease_val.length < 6) || (disease_val.length > 50)) {
                         $('#disease_error').show();
                         $('#disease_error').html('If NO, then please write NO');
                         $('#disease_error').focus();
                          $('#disease_error').css("color","red");
                         disease_err=false;
                         return false;
                         
                     }
                     else
                         {
                             $('#disease_error').hide();
                         }
                    
                 }
                 
                 
      
            $('#submit1').click(function(){
                  id1_err=true;
                  name1_err=true;
                  age1_err=true;
                  address1_err=true;
                  contact1_err=true;
                  disease_err=true;
                
                        id1_check();
                        name1_check();
                        age1_check();
                        address1_check();
                        contact1_check();
                        disease_check();
                
    
                
                if((id1_err == true) && (name1_err == true) && (age1_err == true) && (address1_err == true) && (contact1_err == true) && (disease_err == true) ) 
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