<?php
$searchValue = $_GET['s'];

require_once("../Models/clscustomer.php");

$checkuser = new clscus();

$ketqua = $checkuser->GetUserBytel2($searchValue);

if($ketqua==true)
{
    ?>
        <div id="a3"> Điện thoại này đã đăng ký  rồi. <a href="loginuser.php"> log in? >> </a></div>
    <?php
}  else
{ 
    ?>
    <div>Điện thoại này chưa đăng ký</div> 
<?php
}  
?>