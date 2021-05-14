 <?php include 'links.php'; ?>
<?php
$con=mysqli_connect('localhost','root','','hospitalproject');
if(mysqli_connect_error())
{
    die("Connection Expired");
}
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="SELECT * FROM logintable where username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        header("Location:menu.php");
    }
    else
    {
        echo "<script>alert('Error login')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
}


if(isset($_POST['pat_submit']))
{
    $id=$_POST['id'];
    $date=$_POST['date'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $docapp=$_POST['docapp'];
    $query="INSERT INTO patientappointment(id,date,name,age,gender,address,contact,email,docapp) values('$id','$date','$name','$age','$gender','$address','$contact','$email','$docapp')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Appointment Registered!')</script>";
        echo "<script>window.open('bookappointment.php','_self')</script>";
    }

}

function get_patient_details()
{
    global $con;
    $query="SELECT * FROM patientappointment ";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $date=$row['date'];
        $name=$row['name'];
        $age=$row['age'];
        $gender=$row['gender'];
        $address=$row['address'];
        $contact=$row['contact'];
        $email=$row['email'];
        $docapp=$row['docapp'];
       
        echo "
             <tr>
              
              <td>$id</td>
              <td>$date</td>
              <td>$name</td>
              <td>$age</td>
              <td>$gender</td>
              <td>$address</td>
              <td>$contact</td>
              <td>$email</td>
              <td>$docapp</td>
              <td><button class='btn btn-danger'><a href='deleteappointment.php?id=$id; ' class='text-white'>Delete</a></button></td>
              </tr>";
    }    
}


if(isset($_POST['pat1_submit']))
{
    $regid=$_POST['regid'];
    $date1=$_POST['date1'];
    $pat_name=$_POST['pat_name'];
    $pat_age=$_POST['pat_age'];
    $pat_gender=$_POST['pat_gender'];
    $pat_address=$_POST['pat_address'];
    $pat_contact=$_POST['pat_contact'];
    $pat_disease=$_POST['pat_disease'];
    $dr_obser=$_POST['dr_obser'];
    $building=$_POST['building'];
    $ward=$_POST['ward'];
    $roomno=$_POST['roomno'];
    
    $query="INSERT INTO patientcheckin(regid,date1,pat_name,pat_age,pat_gender,pat_address,pat_contact,pat_disease,dr_obser,building,ward,roomno) values('$regid','$date1','$pat_name','$pat_age','$pat_gender','$pat_address','$pat_contact','$pat_disease','$dr_obser','$building','$ward','$roomno')";
    $result1=mysqli_query($con,$query);
    if($result1)
    {
        echo "<script>alert('Patient Checked-In!!')</script>";
        echo "<script>window.open('patientcheckin.php','_self')</script>";
    }
    
}
function patient_checked_in()
{
    global $con;
    $query="SELECT * FROM patientcheckin";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $regid=$row['regid'];
        $pat_name=$row['pat_name'];
        $pat_age=$row['pat_age'];
        $pat_gender=$row['pat_gender'];
        $pat_contact=$row['pat_contact'];
        $pat_disease=$row['pat_disease'];
        $dr_obser=$row['dr_obser'];
        $building=$row['building'];
        $ward=$row['ward'];
        $roomno=$row['roomno'];
        echo "
             <tr>   
              <td>$regid</td>
              <td>$pat_name</td>
              <td>$pat_age</td>
              <td>$pat_gender</td>
              <td>$pat_contact</td>
              <td>$pat_disease</td>
              <td>$dr_obser</td>
              <td>$building</td>
              <td>$ward</td>
              <td>$roomno</td>
              </tr>";
    }    
}

function pat_checked_in()
{
    global $con;
    $query="SELECT * FROM patientcheckin";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $regid=$row['regid'];
        $pat_name=$row['pat_name'];
        
        echo "
             <tr>   
              <td>$regid</td>
              <td>$pat_name</td>
              <td><button class='btn btn-primary'><a href='payment.php?regid=$regid;' class='text-white'>Payment</a></button></td>
              <td><button class='btn btn-danger'><a href='checkout.php?regid=$regid;' class='text-white'>Check-out</a></button></td>
              </tr>";
    }    
}

if(isset($_POST['pat3_submit']))
{
    $id=$_POST['eid'];
    $date=$_POST['edate'];
    $name=$_POST['ename'];
    $age=$_POST['eage'];
    $gender=$_POST['egender'];
    $address=$_POST['eaddress'];
    $contact=$_POST['econtact'];
    $email=$_POST['eemail'];
    $designation=$_POST['designation'];
    
    $shift=$_POST['shift'];
    $query="INSERT INTO staffdetails(id,edate,ename,eage,egender,eaddress,econtact,eemail,designation,shift) values('$id','$date','$name','$age','$gender','$address','$contact','$email','$designation','$shift')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('Details Successfully Added!!')</script>";
        echo "<script>window.open('addstaff.php','_self')</script>";
        
    }

}
function staff_details()
{
    global $con;
    $query="SELECT * FROM staffdetails";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $date=$row['edate'];
        $name=$row['ename'];
        $age=$row['eage'];
        $gender=$row['egender'];
        $address=$row['eaddress'];
        $contact=$row['econtact'];
        $email=$row['eemail'];
        $designation=$row['designation'];
         $shift=$row['shift'];

        
        echo "
             <tr>   
              <td>$id</td>
              <td>$date</td>
              <td>$name</td>
              <td>$age</td>
              <td>$gender</td>
              
              <td>$address</td>
              <td>$contact</td>
              <td>$email</td>
              <td>$designation</td>
              <td>$shift</td>
              
              </tr>";
    }    
}
function remove_staff()
{
    global $con;
    $query="SELECT * FROM staffdetails";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $id=$row['id'];
        $name=$row['ename'];
        $designation=$row['designation'];
        
        echo "
             <tr>   
              <td>$id</td>
              <td>$name</td>
              <td>$designation</td>
              <td><button class='btn btn-danger'><a href='deletestaff.php?id=$id;' class='text-white'>Remove</a></button></td>
              </tr>";
    }    
}

?>
