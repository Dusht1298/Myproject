
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Pay Using Paytm</title>
    <script>
            window.alert("invalid transactionid");
              </script>
	

    
    
    <!--Stylesheet-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lato|Noto+Sans|Poiret+One|Roboto" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://www.irctctatkal.net/css/app.css" rel="stylesheet">
    <link href="https://www.irctctatkal.net/css/sweetalert.css" rel="stylesheet" />
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://www.irctctatkal.net/js/sweetalert.min.js"></script>
    <script src="https://www.irctctatkal.net/js/app.js"></script>
   
    
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom:0px; background: #141439; font-family: 'Lato', sans-serif;">
        <div class="container">
            <div class="navbar-header">
               
            
                
            </div>
            
        </div>
    </nav>
    

    
    <div id="content">
        <div class="container-fluid" style="background-image: url('qr.png'); background: #141439; background-size: auto; ">
        <div class="row" id="cover" style="background:rgba(0,0,0,0.3); font-size:1.2em; min-height:570px; padding-top:20px;">
        <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-black">
                <div class="panel-heading"> Pay for your order</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6" style="background: #ffffff url('qr.png') center no-repeat; background-size:contain; min-height: 400px;">
                        </div>
                        <div class="col-sm-6">
                          <h2>Steps to pay</h2>
                          <ol>
                            <li>
                              Open paytm app on your mobile.
                            </li>
                            <li>
                              Scan the QR code or enter mobile number <b>"+91 8962712915"</b>
                            </li>
                           
                            <li>
                              Click on pay button. Note down the wallet transaction id.
                            </li>
                            <li>
                              Enter the transaction id for completing your payment.
                            </li>
                          </ol>
                          <hr/>
                          <form role="form" action="payment.php" method="POST">
                              <input type="hidden" name="_token" value="OlysHDAx94oDKAnFVPz3ukfncBYtoHSMGuqQDDY1">
                              <div class="form-group">
                                  <label for="transactioin_id">Transaction Id</label><br/>
                                  <input class="form-control" type="text" name="transaction_id" id="transactioin_id" placeholder="Transaction Id" required="required" value="" />
                                                                </div>
                              <input class="form-control btn btn-primary" type="submit" value="Confirm"/>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
        </div>
    <nav class="navbar navbar-inverse" style="margin-bottom:0px; background: #141439; border-radius:0px; border:0">
        <div class="container" style="text-align:center;">
            <ul class="nav navbar-nav">
              
            </ul>
            <div class="navbar-text navbar-right">© 2018 www.designowar.com</div>
            
        </div>
    </nav>
	</body>
</html>



