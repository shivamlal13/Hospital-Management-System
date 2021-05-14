<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login Page</title>
      <style type="text/css">
        .list-group
          {
              margin-top: 100px;
              color: aliceblue;        
       
          }
        input
          {
              width: 100%;
              border-radius: 10px;
              margin-bottom: 10px;
          }
          .btn
          {
              margin-top: 10px;
              float: right;
          }
          
          label
          {
              padding-top: 20px;
          }
           .collapse
          {
          margin-right:60px;
          }
          a:hover
          {
              background-color: dodgerblue;
              color: aquamarine;
          }
          
          .nav-item
          {
              margin-right: 10px;
              font-weight: bolder;
              color: floralwhite;
          }
          body
          {
              background-image: url(images/login.jpg);
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
          }
      </style>
  </head>
  <body style="background-color:rgba(237, 237, 237,0.5)";>
      <?php include 'navbar.php'; ?>
      <div class="container">
          <div id="error"></div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item" style="background-color:rgba(1, 132, 255,0.8);border-radius:10px; text-align:center;"><h4>Login</h4></div>
                <div class="list-group-item" style="background-color:rgba(250,250,250,1); color:black;">
                  <form action="func.php" method="post">
                       <label><i class="fa fa-user"></i> Username</label>
                       <input type="text" name="username" class="list-group-item" id="username"placeholder="Your Username" autocomplete="off">
                      <label><i class="fa fa-user"></i> Password</label>
                       <input type="password" name="password" class="list-group-item" placeholder="Password" autocomplete="off">
                        <button class="btn btn-primary" name="submit">Log In</button>
                    </form>
                </div>
              </div>
            </div>
            <div class="col-md-4"></div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      <script type="text/javascript">
        $("form").submit(function (e))
        {
            e.preventDefault();
          var error="";
          if($("#username").val()=="")
              {
                  error+="<p>Username is required!</p>";
              }
          $("#error").html(error)
          
          
                                   }
      
      
      
      </script>
      
      
      
      
      
      
      
      
      
      
      
  </body>
</html>