<div class="row col-1 col-md-10 col-lg-10 col-xl-10 mx-auto mt-3  d-flex flex-shrink-0 p-3 bg-light">
        	<h1>Tin tức</h1>
            <?php
			if($tintuc->data==NULL){
				echo "<H2>KHÔNG TÌM THẤY TIN</H2>";}
			else
			{
				$row = $tintuc->data;
				$hinhanh = $row["hinhanh"];
				  if($hinhanh=="")
				  	$hinhanh= "no-Image.png";
			?>
            <div id="content_sp">
              <div class="row justify-content-start">
              <div class="col-1 col-sm-2 col-md-2 mx-2 card">
                <p><a href="#"><?=$row["tieude"];?></a></p><!-- thẻ <a href>...</a> để tạo liên kết tới sp1.htm-->
                <p><a href="#"><img src="Hinhanh/Tintuc/<?=$hinhanh?>"></a></p> <!--thẻ p này dùng để cố định chiều cao dòng 2, và để ảnh căn giữa-->
               </div>
              <div class="tomtatsanpham card col-1 col-sm-5 col-md-7" style="width:680px; height:350px;padding:5px;">
              	
                     <h2> Tóm tắt</h2>
                  <div class="noidung_tomtat" style="width:540px; height:280px;margin:10px; padding:10px;" >
                  <h3 ><?=$row["tomtat"]?></h3>  
                  </div>
              </div> 
              </div>
              <div class="chitietsanpham">
                <div class="card text-dark"></div>
              	<h2>Nội dung</h2>
                <div class="text-dark" style="margin: 5px; padding: 10px; font-size:20px;font-family: Roboto, Arial, Helvetica, Verdana, Geneva, Tahoma, sans-serif;">  <?=$row["noidung"]?> </div>
              </div> 
              
            </div>
            <?php
			}
			?>
        </div>
        
