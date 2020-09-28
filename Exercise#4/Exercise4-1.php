<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="register-form.css">
    <title></title>
</head>

<body>



    <div class=" col-md-9 container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <h1>Welcome</h1>
                <p> Create your Amazing Bio!</p>
                <img src="./img/m3.jpg">
            </div>
            <div class="col-md-7 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Create Account</h3>
                        <form action="./api's/eventHandler.php" method= "post">
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="firstname" placeholder="Enter Firstname" value="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lastname" placeholder="Enter Lastname" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder=" Enter Address" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" name = "mail" class="form-control" placeholder="Enter Email Address" />
                                </div>
                            <div class="form-group">
                                <input type="submit" class="btnRegister" name = "register" value="Register" />
                            </div>
                            
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    </div>

</body>

</html>