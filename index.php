<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Hospital Management</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
      <style type="text/css">
          .collapse
          {
          margin-right:60px;
          }
          
          
          .nav-item
          {
              margin-right: 10px;
              font-weight: bolder;
              color: floralwhite;
          }
          body
          {
              background-color:rgba(210, 216, 210,0.3);
              font-family: Arial;
          }
          
          #foot
          {
              margin-top: 100px;
              margin-left: 100px;
              margin-right: 80px;
          }
          #footer
        {
          background-color: rgb(92, 94, 93);
          text-align: center;
          margin-top: 200px;
         
          color: azure;
          padding-bottom: 10px;
          padding-top: 10px;
          color: floralwhite;
          }
     </style>   
  </head>
  <body>
        <?php include 'navbar.php'; ?>
      <!--carousel-->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/index1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color: rgba(10, 10, 10, 1)">
              <h1>Join our Team</h1>
              <h6>It's not just about Care<br>It's about professional development!! </h6>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/index2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color: rgba(10, 10, 10, 1)">
              <h1>Come On,</h1>
              <h6>Lets Help eachother!!</h6>
            </div>
          </div>
            
            <div class="carousel-item">
            <img src="images/index3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block" style="color: rgba(10, 10, 10, 1)">
              <h1>Come On,</h1>
              <h6>Lets Help eachother!!</h6>
            </div>
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        <div class="container" style="margin-top:20px; background-color:rgba(213, 220, 224,0.3); padding-top:20px; padding-bottom:20px; border-radius:10px;">
      <div class="card-deck">
        <div class="card">
          <img src="images/card1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center; color:rgba(0, 145, 245,1)"><b>Patient Management</b></h5>
            <p class="card-text">A description of the interaction, from intake to discharge, between the patient and the health care team. It includes communication, empathy, examination, evaluation, diagnosis, prognosis, and intervention. The last element, intervention (or treatment), depends on the others.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="images/card2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center; color:rgba(0, 145, 245,1)"><b>Doctor Management</b></h5>
            <p class="card-text">The Doctor of Management (DM) is a professional doctorate with a degree focus in management, leadership, and organizational topics. The intention of the DM is to advance the skills of professionals in research, analysis, theory, and practice in organizations</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img src="images/card3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title" style="text-align:center; color:rgba(0, 145, 245,1);"><b>Admin Management</b></h5>
            <p class="card-text">Administrative Management is the process of managing information through people. This usually involves performing the storage and distribution of information to those within an organisation. A large number of roles within business require some element of administrative management.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <!--footer-->
    <div id="foot">
      <p style="text-align:center; color:rgba(0, 145, 245,1);"><b>About Hospital Management System</b></p>
      <p style="background-color:white;padding-top:10px; padding-bottom:10px; padding-left:5px;border-radius:10px;">A hospital information system (HIS) is an element of health informatics that focuses mainly on the administrational needs of hospitals. In many implementations, an HIS is a comprehensive, integrated information system designed to manage all the aspects of a hospital's operation, such as medical, administrative, financial, and legal issues and the corresponding processing of services. Hospital information system is also known as hospital management software (HMS) or hospital management system.</p>
    </div>
      <div id="footer">
      <h4><b>Nagarjuna College of Engineering And Technology</b></h4>
      <p>Venkatagiri Kote, Devanahalli</p>
      <p>Bengaluru</p>
       </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>