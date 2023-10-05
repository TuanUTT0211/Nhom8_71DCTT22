<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>verified email</title>

    <link rel="stylesheet" type="text/css" href="CSS/base.css" />
    <link rel="stylesheet" type="text/css" href="CSS/login.css" />

</head>

<body>
   
    <!--   Modal layout-->
    <div class="modal">
        <div class="modal__overlay">

        </div>

        <div class="modal__body">
            <!--Login form-->
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">User Account Activation </h3>
                    </div>

                    <form class="" id="frmLogin" name="frmLogin" action="loginuser.php">

                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <?php echo $thongbao; ?>
                            </div>

                        </div>
                        <div style="padding-bottom: 30px;" class="auth-form__controls">
                            <button type="submit" id="submit" name="submit" class="btn btn--primary">login</button>
                        </div>
                        <div> <a href=index.php>
                    <button   class="btn btn--primary">HOME</button></a></div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>