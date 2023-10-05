<?php
$searchValue = $_GET['s'];

require_once("../Models/clsSanpham.php");

$search_Onkeyup = new clsSanpham();

$ketqua = $search_Onkeyup->GetProductListOnkeyup(1,0, $searchValue);
$rows = $search_Onkeyup->data;

foreach($rows as $row)
{
    ?>
    
        <tr class="item-search-Onkeyup mt-3" style="height: 50px;" >
            <td style="padding:5px;"><a href="?module=chitietsanpham&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>"><img class="figure-img img-fluid rounded" style="width: 50px; height: 70px;" src="Hinhanh/Sanpham/<?=$row["images"]?>"><a></td>
            <td style="padding:5px;"><a href="?module=chitietsanpham&manhom=<?=$row["cat_id"]?>&masp=<?=$row["id"]?>" style="color:red;"><?=$row["title"]?></a></td>
        </tr>
        
    <?php
}
?>