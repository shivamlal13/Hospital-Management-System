<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Payment Gateway</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            body {
              font-family: Arial;
              font-size: 17px;
              padding: 8px;
            }
        
            .row {
              display: -ms-flexbox; /* IE10 */
              display: flex;
              -ms-flex-wrap: wrap; /* IE10 */
              flex-wrap: wrap;
              margin: 0 -16px;
            }
            .container {
                  background-color: #f2f2f2;
                  padding: 5px 20px 15px 20px;
                  border: 1px solid lightgrey;
                  border-radius: 3px;
                }
                label {
                  margin-bottom: 10px;
                  display: block;
                    float: left;
                }
            .icon-container {
                  margin-bottom: 20px;
                  padding: 7px 0;
                  font-size: 40px;
                }
            input[type=text] {
              width: 100%;
               
              margin-bottom: 10px;
              padding: 12px;
              border: 1px solid #ccc;
              border-radius: 3px;
            }

        
        </style>
    
    </head>
    <body>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="container">
                    <form action="" method="post">
                        <div class="row">
                        
                            <div class="col-md-3"></div>
                            <div class="col-md-6" style="text-align:center;">
                                <h3>Payment</h3>
                                <label for="fname" style="text-align:center;">Accepted Cards</label>
                                <div class="icon-container">
                                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                  <i class="fa fa-cc-discover" style="color:orange;"></i>
                                </div>
                                <label for="cname">Name on Card</label>
                                <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                <label for="ccnum">Credit card number</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                                <label for="expmonth">Exp Month</label>
                                <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            
                            
                            
                            
                            
                            
                            </div>
                            <div class="col-md-3"></div>
                        
                        
                        </div>
                    
                    
                    
                    </form>
                
                
                
                </div>
            
            
            
            </div>
            <div class="col-md-3"></div>
        
        
        </div>
    
        
        
        
        
    
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>