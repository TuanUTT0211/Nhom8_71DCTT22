<?php
$searchValue = $_GET['s'];

require_once("../Models/clscustomer.php");

$checkuser = new clscus();

$ketqua = $checkuser->GetUserByemail2($searchValue);

if($ketqua==true)
{
    ?>
        <div id="a3">Email này đã đăng ký rồi. <a href="loginuser.php"> log in? >> </a></div>
    <?php
} else  
{ 
    ?>
    <div>Email chưa đăng ký</div>
   
<?php
}  
?>