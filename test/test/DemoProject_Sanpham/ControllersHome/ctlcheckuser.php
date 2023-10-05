<?php
$searchValue = $_GET['s'];

require_once("../Models/clscustomer.php");

$checkuser = new clscus();

$ketqua = $checkuser->GetUserByUsername2($searchValue);

if($ketqua==true)
{
    ?>
        <div id = "a1">Đã có user này rồi. <a href="loginuser.php"> log in? >> </a></div>
    <?php
} else  
{ 
    ?>
    <div>Chưa có user này</div>
    
<?php
}  
?>