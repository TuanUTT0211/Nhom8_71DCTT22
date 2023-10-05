<?php
require_once("clsDatabase.php");
class clscus
{
	public $db;
	public $data;//mảng chứa dữ liệu trả về bởi hàm truy vấn dữ liệu
	function __construct()
	{
		$this->db = new clsDatabase();//tạo đối tượng clsDatabase và kết nối CSDSL
		$this->data = array();
	}
	//các hàm truy vấn, thêm, sửa, xóa
	function LayDanhSachuser()
	{
		$sql = "SELECT * FROM tbcustomer";
		$ketqua = $this->db->ThucthiSQL($sql);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	//Hàm thêm dữ liệu
	function Themuser($user,$pass,$fullname,$tel,$adress,$email, $status)
	{
		$sql = "INSERT INTO  tbcustomer(user,pass,fullname, tel,adress,email,status) VALUES (?, ?, ?, ?, ?,?,?)";
		$data[] = $user;
		$data[] = md5($pass);
        $data[] = $fullname;
		$data[] = $tel;
		$data[] = $adress;
		$data[] = $email;
        $data[] = $status;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	//Hàm sửa dữ liệu
	function Suauser($id, $fullname, $tel,$adress,$email)
	{
		$sql = "UPDATE  tbcustomer SET fullname = ?,tel = ? ,adress = ? ,email = ? WHERE cusid=?";
      
        $data[] = $fullname;
		$data[] = $tel;
		$data[] = $adress;
		$data[] = $email;
   
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
    function Suafulluser($id,$user,$pass, $fullname, $tel,$adress,$email, $status)
	{
		$sql = "UPDATE  tbcustomer SET user = ?, pass = ?, fullname = ?,tel = ? ,adress = ? ,email = ? , status = ? WHERE cusid=?";
		$data[] = $user;
		$data[] = md5($pass);
        $data[] = $fullname;
		$data[] = $tel;
		$data[] = $adress;
		$data[] = $email;
        $data[] = $status;
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	function Suapassuser($email ,$pass)
	{
		$sql = "UPDATE  tbcustomer SET  pass = ?   WHERE email=?";
        
		$data[] = md5($pass);
       
		$data[] = $email;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
    
	function KiemTraemail($email)
	{
		$sql = "SELECT * FROM tbcustomer WHERE email=?";
		
		$data[] = $email;
		 
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		//LẤY BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}

	//Hàm xóa dữ liệu
	function Xoauser($id)
	{
		$sql = "DELETE FROM tbcustomer WHERE cusid=?";
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	//Hàm TimTheoIDTintuc($id) truy vấn dữ liệu theo id lưu vào thuộc tính data
	function TimTheoIDuser($id, $trangthai=2)
	{
		$sql = "SELECT * FROM tbcustomer WHERE cusid=?";
		if($trangthai!=2) 
			$sql = $sql . " AND status = " . $trangthai;
			
		 $data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		//LẤY BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	function KiemTrauser($user,$pass)
	{
		$sql = "SELECT * FROM tbcustomer WHERE user=? and pass=?";
		
		$data[] = $user;
		$data[] = md5($pass);
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		//LẤY BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}

	

	function LayDanhSachuser2($tukhoa="")
	{
		$sql = "SELECT * FROM tbcustomer WHERE 1";
		if($tukhoa!="")
			$sql = $sql . " AND ( fullname LIKE '%" . $tukhoa . "%' OR user LIKE '%" . $tukhoa . "%') " ;
		$ketqua = $this->db->ThucthiSQL($sql);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}

	function LayDShoadontheouser($trangthai=2, $cusid=0)
	{    
		$sql = "SELECT hd.*, us.user, us.status 
					FROM tbhoadon AS hd INNER JOIN tbcustomer AS us 
					ON hd.cusid=us.cusid WHERE 1 ";
		if($cusid != 0)
			$sql = $sql . " AND hd.cusid = " . $cusid;
		//nếu khác 2 thì thêm mệnh đề WHERE để lọc, 
		//còn nếu =2 thì không có có WHERE => sẽ hiển thị mọi sản phẩm
		if($trangthai!=2) 
		{
			$sql = $sql . " AND status = " . $trangthai;
			$sql = $sql . " AND trangthai = " . $trangthai;
		}
		//bổ sung tìm theo từ khóa
		 
		$ketqua = $this->db->ThucthiSQL($sql);
		//LẤY CÁC BẢN GHI KẾT QUẢ LƯU VÀO $data
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetchAll();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}

	function SuaTrangThaiuser($id, $status)
	{
		$sql = "UPDATE tbcustomer SET status = ? WHERE cusid=?";
		$data[] = $status;
		$data[] = $id;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}

	function GetUserByUsername($username)
	{
		$sql = "SELECT * FROM tbcustomer WHERE user=?";
		$data[] = $username;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
		return $ketqua;//trả về $ketqua: TRUE/FALSE
	}
	function GetUserByUsername2($username)
	{   
			
	 
		$sql = "SELECT * FROM tbcustomer WHERE user=?";
		$data = [$username];
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
			if($this->data == null) {
				return $ketqua=false;
			} else {
		return $ketqua; }//trả về $ketqua: TRUE/FALSE
		
	}


	function GetUserByemail2($email)
	{   
			
	 
		$sql = "SELECT * FROM tbcustomer WHERE email=?";
		$data = [$email];
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
			if($this->data == null) {
				return $ketqua=false;
			} else {
		return $ketqua; }//trả về $ketqua: TRUE/FALSE
		
	}

	function GetUserBytel2($tel)
	{   
			
	 
		$sql = "SELECT * FROM tbcustomer WHERE tel=?";
		$data = [$tel];
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		$this->data=NULL;
		if($ketqua==TRUE)
			$this->data = $this->db->pdo_stm->fetch();
			if($this->data == null) {
				return $ketqua=false;
			} else {
		return $ketqua; }//trả về $ketqua: TRUE/FALSE
		
	}

	function SuaPasstuUser($username,$password)
	{
		$sql = "UPDATE tbcustomer SET pass=? WHERE user=?";
		$data[] = md5($password);
		$data[] = $username;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}

	function dky($cusid,$code,$status =2)
	{
		$sql = "INSERT INTO  tbcodeemail  (cusid,code,status) VALUES (?, ?, ?)";
		
		 $data[] = $cusid;
        
		$data[] = $code;
		$data[] = $status;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
	function timcode($cusid)
	{
		$sql = "SELECT * from  tbcodeemail  where cusid =?";
		
		 $data[] = $cusid;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		 if($ketqua==TRUE)
		 $this->data = $this->db->pdo_stm->fetch();
		 if($this->data == null) {
			 return $ketqua=false;
		 } else {
	 return $ketqua; }
	}
    function updatestt($email)
	{
		$sql = "UPDATE tbcustomer SET status=1 WHERE email=?";
		 
		$data[] = $email;
 		$ketqua = $this->db->ThucthiSQL($sql,$data);
		return $ketqua;
	}
}
?>