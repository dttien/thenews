<?php
//Chuyển hướng k bị lỗi
	ob_start();
	session_start();
	//echo $_SESSION["idGroup"];
	if(!isset($_SESSION["idUser"]) || $_SESSION["idGroup"] != 1){
		header("location:../index.php");
	}
	//ket noi csdl
	require "../lib/dbCon.php";
	require "../lib/quantri.php";
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title><link rel="stylesheet" type="text/css" href="layout.css"/>
</head>

<body>
<table width="1000" border="1" align="center">
  <tr>
    <td id="hangTieuDe">TRANG QUẢN TRỊ
    <div style="width:200px; float:right">
    	<div> Chào <?php echo $_SESSION["HoTen"] ?> </div>
    </div>
    </td>
  </tr>
  <tr>
    <td id="hang2"><?php require "menu.php"; ?></td>
  </tr>
  <tr>
    <td><table width="100%" border="1">
      <tr>
        <td colspan="6">DANH SÁCH THỂ LOẠI</td>
        </tr>
      <tr>
        <td>idTL</td>
        <td>TenTL</td>
        <td>TeenTL_KhongDau</td>
        <td>ThuTu</td>
        <td>AnHien</td>
        <td><a href="themTheLoai.php">Thêm</a></td>
      </tr>
      <?php
	  $theloai= DanhSachTheLoai();
	  while ($row_theloai = mysqli_fetch_array($theloai))
	  {
		  ob_start();
	  ?>
      <tr>
        <td>{idTL}</td>
        <td>{TenTL}</td>
        <td>{TenTL_KhongDau}</td>
        <td>{ThuTu}</td>
        <td>{AnHien}</td>
        <td><a href="suaTheLoai.php?idTL={idTL}">Sửa</a>-<a onclick = "return confirm('Bạn có chắc là muốn xoá thể loại')" href="xoaTheLoai.php?idTL={idTL}">Xoá</a></td>
      </tr>
      <?php
	  $s = ob_get_clean();
	  $s = str_replace("{idTL}", $row_theloai{"idTL"}, $s);
	  $s = str_replace("{TenTL}", $row_theloai{"TenTL"}, $s);
	  $s = str_replace("{TenTL_KhongDau}", $row_theloai{"TenTL_KhongDau"}, $s);
	  $s = str_replace("{ThuTu}", $row_theloai{"ThuTu"}, $s);
	  $s = str_replace("{AnHien}", $row_theloai{"AnHien"}, $s);
	  echo $s;
	  }
	  ?>
    </table>      <br /></td>
  </tr>
</table>
</body>
</html>