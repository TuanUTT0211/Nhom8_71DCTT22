<?php
						require("KiemtraDangNhapuser.php");
						?>
<div><br> </br> </div>
      <div class="row col-1 col-md-10 col-lg-10 col-xl-10 mx-auto mt-3  d-flex flex-shrink-0 p-3 bg-light">
          <div class="col-1 col-md-10">
            <br></br>
            
        	<h1 style="color:red;">MY ACCOUNT</h1>
          <br></br>
                        <script>
							function kt() {
								t1 = document.getElementById("t1");
								t2 = document.getElementById("t2");
								t3 = document.getElementById("t3");
                                t4 = document.getElementById("t4");
                				if (t1.value == "" || t2.value == "" || t3.value == "" || t4.value == "" ) {
									alert("please fill up all form");
									return false;
								}
							}
						</script>
            
            <?php
           
				$row = $user->data;
                  
			?>
             <div class="container">
            <form name="form1" method="post" action="?module=<?=$module?>&act=xulysua" onSubmit="return kt();">
            <input type="hidden" name="id" id="id" value="<?=$id?>">

                <div>
                  <label class="form-label" width="80" height="30" style="color:red;">Username: <?=$row["user"]?> </label> 
                </div>

                <div>
                  <label class="form-label" width="80" height="30">FullName:</label>
                  <input class="form-control" type="text" name="t1" id="t1" size="80"  value="<?=$row["fullname"]?>"  >
                </div>

                <div>
                  <label class="form-label" width="80" height="30">Tel:</label>
                  <input class="form-control" type="text" name="t2" id="t2" size="80"  value="<?=$row["tel"]?>"  >
                </div>

                <div>
                  <label class="form-label" width="80" height="30">Email:</label>
                  <input class="form-control" type="text" name="t3" id="t3" size="80"  value="<?=$row["email"]?>"  >
                </div>
            

                <div>
                  <label class="form-label">Address:</label>
                  <textarea class="form-control" rows="5" cols="5" id="t4" name="t4"  ><?=$row["adress"]?></textarea>
                </div>
                <div>
                  <td></td>
                  <td><input type="submit" name="button" id="button" value="Change"></td>
                </div>
              
            </form>
            </div>
            <script language="javascript">
				var ckTomtat = CKEDITOR.replace('t4');
				ckTomtat.config.width = 600;
				CKFinder.setupCKEditor(ckTomtat, null, { type: 'Images' });
			 
			</script>
			</div>
        </div>
