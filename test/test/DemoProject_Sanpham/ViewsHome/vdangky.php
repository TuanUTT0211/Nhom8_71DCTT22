
      <div><br> </br> <div>
      <div class="row col-1 col-md-10 col-lg-10 col-xl-10 mx-auto mt-3  d-flex flex-shrink-0 p-3 bg-light">
          <div class="col-1 col-md-10">
            <br></br>
            
        	<h1 style="color:red;  margin: auto; width: 50%;"> Đăng ký Thành viên</h1>
           
            <script>
							function kt() {
								t1 = document.getElementById("t1");
								t2 = document.getElementById("t2");
								t3 = document.getElementById("t3");
                t4 = document.getElementById("t4");
                t5 = document.getElementById("t5");
                t6 = document.getElementById("t6");
                a1 = document.getElementById("a1");
                a2 = document.getElementById("a2");
                a3= document.getElementById("a3");
								if (t1.value == "" || t2.value == "" || t3.value == "" || t4.value == "" ||t5.value == "" ||t6.value == "") {
									alert("Chưa nhập đủ thông tin, vui lòng nhập lại");
									return false;
								}
                if (a1.value != "" || a2.value != "" || a3.value != "") {
									alert("  thông tin bị trùng , vui lòng nhập lại");
									return false;
								}
							}
						</script>
            <div class="container">
            <form name="form1" method="post" action="?module=<?=$module?>&act=xulythem" onSubmit="return kt();">
              
                <div>
                  <label class="form-label" width="80" height="30">UseName:</label>
                  <label class="form-label" width="80" height="30" name="checkuser" id="checkuser"></label>
                  <input class="form-control" type="text" name="t1" id="t1" size="80" onkeyup="searchuser()" required>
                </div>

                <div>
                  <label class="form-label" width="80" height="30">Password:</label>
                  <input class="form-control" type="password" name="t2" id="t2" size="80" required>
                </div>

                <div>
                  <label class="form-label" width="80" height="30">FullName:</label>
                  <input class="form-control" type="text" name="t3" id="t3" size="80">
                </div>

                <div>
                  <label class="form-label" width="80" height="30">Phone:</label>
                  <label class="form-label" width="80" height="30" name="checktel" id="checktel" ></label>
                  <input class="form-control" type="text" name="t4" id="t4" size="80" onkeyup="searchtel()">
                </div>

                
                <div>
                  <label class="form-label">Address:</label>
                  <textarea class="form-control" rows="5" cols="5" id="t5" name="t5"></textarea>
                </div>

                <div>
                  <label class="form-label" width="80" height="30">Email:</label>
                  <label class="form-label" width="80" height="30" name="checkemail" id="checkemail" value="0"></label>
                  <input class="form-control" type="email" name="t6" id="t6" size="80" onkeyup="searchemail()">
                </div> 
                <br></br>
                 <div>
                  <label class="form-label">I hereby read and agree to the General Terms and Conditions. I have taken note of the Terms of Revocation. </label>
                  <input  class="form-check-input" type="checkbox" name="c1" id="c1" value="1" required> 
                </div>
                <div>
                  <label class="form-label">I have read the Privacy Policy and agree to the storage of my data. I am aware that I may revoke my consent at any time. </label>
                  <input  class="form-check-input" type="checkbox" name="c2" id="c2" value="1" required> 
                </div>
                
                <div>
                  <td></td>
                   <br></br>
                  <td><input class="btn btn-success" type="submit" name="button" id="button" value="SUBMIT"></td>
                </div>
              
            </form>

			</div>
        </div> </div>















