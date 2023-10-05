<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="css_Admin/Login.css">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Quản lý thư viện</title>
        
        <link rel="icon" type="image/x-icon" href="public/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- CSS only -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            .divider:after,
            .divider:before {
                content: "";
                flex: 1;
                height: 1px;
                background: #eee;
            }

            .h-custom {
                height: calc(100% - 73px);
            }

            @media (max-width: 450px) {
                .h-custom {
                    height: 100%;
                }
            }
        </style>
    </head>
</head>

<body>
    <section class="vh-100" >
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <h1 style="text-align:center"> </h1>
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="./CSS/lg.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form id="frmLogin" name="frmLogin" method="post" action="XulyloginUser.php">
                        <fieldset>
                            <legend> Tài khoản và mật khẩu</legend>
                            <div class="input_box">
                                <span class="label">Username: <b style="color:red"></b></span>
                                <input type="text" id="tUser" name="tUser" class="no_border" placeholder="Input Username">
                            </div>
                            <div class="input_box">
                                <span class="label">Password: <b style="color:red"></b></span>
                                <input type="password" id="tPassword" name="tPassword" class="no_border" placeholder="Input Password">
                            </div>
                            <div class="text-center text-lg-start mt-4 pt-2">
                                <input class="btn btn-primary" type="submit" name="b1" id="b1" value="Log in">
                                <input class="btn btn-secondary" type="reset" value="Reset">
                            </div>
                            <div> <a href=index.php>
                                     Go back</a>
                            </div>
                            <div> <a href=forgotpass.php> forgot you pass word ?  </a></div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>