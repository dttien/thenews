<?php
	function TinMoiNhat_MotTin(){
		
		$conn  	= myConnect();
		$qr 	= "
			SELECT * FROM tin 
			ORDER BY idTin DESC
			LIMIT 0,1
		";
		
		$result = mysqli_query($conn, $qr);
		return $result;
		
	}
	function TinMoiNhat_BonTin(){
		
		$conn  	= myConnect();
		$qr 	= "
			SELECT * FROM tin 
			ORDER BY idTin DESC
			LIMIT 1,6
		";
		
		$result = mysqli_query($conn, $qr);
		return $result;
		
	}
	
	function TinXemNhieuNhat(){
		$conn 	= myConnect();
		$qr 	= "
			SELECT * FROM tin
			ORDER BY SoLanXem DESC
			LIMIT 0,6
		";
		$result = mysqli_query($conn, $qr);
		return $result;

		}

	function TinMoiNhat_TheoLoaiTin_MotTin($idLT){
		
		$conn  	= myConnect();
		$qr 	= "
			SELECT * FROM tin 
			WHERE idLT = $idLT
			ORDER BY idTin DESC
			LIMIT 0,1
		";
		
		$result = mysqli_query($conn, $qr);
		return $result;
		
	}
	function TinMoiNhat_TheoLoaiTin_BonTin($idLT){
		$conn 	= myConnect();
		$qr 	= "
			SELECT * FROM tin
			WHERE idLT = $idLT
			ORDER BY idTin DESC
			LIMIT 1,6
		";
		$result = mysqli_query($conn, $qr);
		return $result;
	}
	
	function TenLoaiTin($idLT)
	{
		$conn = myConnect();
		$qr = "SELECT Ten From loaitin
		where idLT = $idLT"
		;
		$loaitin = mysqli_query($conn,$qr);
		$row = mysqli_fetch_array($loaitin);
		return $row['Ten'];
	}
	
	function QuangCao($vitri)
	{
		$conn = myConnect();
		$qr = "
		Select * from quangcao
		where vitri = $vitri
		";
		return mysqli_query($conn,$qr);
	}
	
	function DanhSachTheLoai()
	{
		$conn = myConnect();
		$qr = "
		select * from theloai
		";
		return mysqli_query($conn,$qr);
	}
	
	function DanhSachLoaiTin_Theo_TheLoai($idTL)
	{
		$conn = myConnect();
		$qr = "
		select * from loaitin
		where idTL =$idTL
	";
	return mysqli_query($conn,$qr);
	}
	
	function TinTheoLoaiTin ($idLT)
	{
		$conn = myConnect();
		$qr = "
		select * from tin
		where idLT =$idLT
		order by idTin DESC
	";
	
	return mysqli_query($conn,$qr);
	}
	
	function TinTheoLoaiTin_PhanTrang ($idLT,$from, $sotin1trang)
	{
		$conn = myConnect();
		$qr = "
		select * from tin
		where idLT =$idLT
		order by idTin DESC
		LIMIT $from , $sotin1trang
	";
	
	return mysqli_query($conn,$qr);
	}
	
	function breadCrumb($idLT)
	{$conn = myConnect();
		$qr = "
		select TenTL, Ten 
		from theloai, loaitin
		where theloai.idTL = loaitin.idTL
		and idLT =$idLT
		";
		return mysqli_query($conn,$qr);
	}
	
	function TinMoi_BenTrai($idTL)
	{
		$conn = myConnect();
		$qr = "
		select * from tin
		where idTL = $idTL
		order by idTin desc
		limit 0,1
		";
		return mysqli_query($conn,$qr);
	}
	
	function TinMoi_BenPhai($idTL)
	{
		$conn = myConnect();
		$qr = "
		select * from tin
		where idTL = $idTL
		order by idTin desc
		limit 1,2
		";
		return mysqli_query($conn,$qr);
	}
	
	function ChiTietTin($idTin)
	{
		$conn = myConnect();
		$qr = "
		select * from tin
		where idTin = $idTin
				";
		return mysqli_query($conn,$qr);
	}
	
	function TinCungLoaiTin($idTin,$idLT)
	{
		$conn = myConnect();
		$qr = "
		select * from tin
		where idTin <> $idTin
		and idLT = $idLT
		order by rand()
		limit 0,3
				";
		return mysqli_query($conn,$qr);
	}
	
	function CapNhatSoLanXemTin($idTin){
		$conn	= myConnect();
		$qr 	= "
			UPDATE tin
			SET SoLanXem = SoLanXem + 1
			WHERE idTin = $idTin;
		";
		$result = mysqli_query($conn, $qr);
	}	
	function TimKiem($tukhoa)
	{
		$conn	= myConnect();
		$qr 	= "
				select * from tin
				where TieuDe REGEXP '$tukhoa'
				order by idTin desc
					";
		return mysqli_query($conn, $qr);
	}
	
	
?>