<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Login</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <style>
        .login,
        .image {
            min-height: 100vh
        }

        .bg-image {
            background-image: url('./assets/wallet_icon_T.png');
            background-size: cover;
            background-position: center center
        }
    </style>
</head>

<body oncontextmenu='return true' class='snippet-body'>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-xl-6 mx-auto">
                                <h3 class="display-4">LOGIN!!</h3> <br>
                                <form id="lgform" >
                                    <div class="form-group mb-3"> 
                                        <input id="inputEmail" name="username" type="text" placeholder="Username" required="true" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> </div>
                                    <div class="form-group mb-3"> 
                                        <input id="inputPassword" name="password" type="password" placeholder="Password" required="true" class="form-control rounded-pill border-0 shadow-sm px-4 text-danger"><br> </div>
                                    <!-- <div class="custom-control custom-checkbox mb-3"> <input id="customCheck1" type="checkbox" checked class="custom-control-input"> 
                                <label for="customCheck1" class="custom-control-label">Remember password</label> </div>  -->
                                    <button type="submit" class="btn btn-danger btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                                    <!-- <div class="text-center d-flex justify-content-between mt-4">
                                    <p> OR &nbsp<a href=" " class="font-italic text-muted"> <u>Create Account</u></a></p>
                                </div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript'></script>
    <script>
        $(document).ready(function () {
            $("#lgform").submit(function (e) { 
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "handler",
                    data: new FormData(this),
                    dataType: "text",
                    processData:false,
                    contentType:false,
                    success: function (response) {
                        if(response==true){
                            window.location.href="admin";
                        }else{
                         alert(response);
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>