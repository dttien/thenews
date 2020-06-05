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
    <td height="248"><table width="100%" border="1">
      <tr>
        <td colspan="6">DANH SÁCH TIN</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><a href="themTin.php">Thêm</a></td>
      </tr>
     <?php
	 $tin = DanhSachTin();
	 while($rowtin= mysqli_fetch_array($tin))
	 {
		 ob_start();
	 ?>
      <tr>
        <td><p>idTin:{idTin}</p>
          <p>{Ngay}</p></td>
        <td><p><a href="suaTin.php?idTin={idTin}">{TieuDe}</a></p>
          <p><img style="float:left; margin-right:5px" src="../{urlHinh}" width="150" height="96" /> {TomTat}</p></td>
        <td>{TenTL}</td>
        <td><p>{TenTL}</p>
          <p>-</p>
          <p>{Ten}</p></td>
        <td><p>Số lần xem : {SoLanXem}</p>
          <p>{TinNoiBat}</p>
          <p>- {AnHien}</p></td>
        <td><a href="suaTin.php?idTin={idTin}">Sửa</a> - <a href="xoaTin.php?idTin={idTin}">Xoá</a></td>
      </tr>
      
      <?php
	  $s = ob_get_clean();
	  $s = str_replace("{idTin}", $rowtin['idTin'],$s);
	  $s = str_replace("{Ngay}", $rowtin['Ngay'],$s);
	  $s = str_replace("{TieuDe}", $rowtin['TieuDe'],$s);
	  $s = str_replace("{TomTat}", $rowtin['TomTat'],$s);
	  if (strpos($rowtin['urlHinh'], 'tintuc') == false) 
				{
    				$rowtin['urlHinh']= 'upload/tintuc/'.$rowtin['urlHinh'];
				}		 		 
	  $s = str_replace("{urlHinh}", $rowtin['urlHinh'],$s);
	  $s = str_replace("{TenTL}", $rowtin['TenTL'],$s);
	  $s = str_replace("{Ten}", $rowtin['Ten'],$s);
	  $s = str_replace("{SoLanXem}", $rowtin['SoLanXem'],$s);
	  $s = str_replace("{TinNoiBat}", $rowtin['TinNoiBat'],$s);
	  $s = str_replace("{AnHien}", $rowtin['AnHien'],$s);
	  echo $s;
	  }
	  ?>
	  
    </table></td>
  </tr>
</table>
</body>
</html>