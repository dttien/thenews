<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1">
    <tr>
      <td colspan="2">Thông tin đăng kí thành viên</td>
    </tr>
    <tr>
      <td width="18%">Username :</td>
      <td width="82%"><label for="txtUserName2"></label>
        <input type="text" name="txtUserName" id="txtUserName2" /></td>
    </tr>
    <tr>
      <td> Họ và tên :</td>
      <td><label for="txtHoTen"></label>
        <input type="text" name="txtHoTen" id="txtHoTen" /></td>
    </tr>
    <tr>
      <td>Password :</td>
      <td><label for="txtPassword"></label>
        <input type="password" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr>
      <td>Email :</td>
      <td><label for="txtEmail"></label>
        <input type="text" name="txtEmail" id="txtEmail" /></td>
    </tr>
    <tr>
      <td>Địa Chỉ :</td>
      <td><label for="txtDiaChi"></label>
        <textarea name="txtDiaChi" id="txtDiaChi" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>Điện Thoại :</td>
      <td><label for="txtDienThoai"></label>
        <input type="text" name="txtDienThoai" id="txtDienThoai" /></td>
    </tr>
    <tr>
      <td>Giới tính :</td>
      <td><p>
        <label>
          <input type="radio" name="rdgGioiTinh" value="radio" id="rdgGioiTinh_0" />
          Nam</label>
        <br />
        <label>
          <input type="radio" name="rdgGioiTinh" value="radio" id="rdgGioiTinh_1" />
          Nữ</label>
        <br />
      </p></td>
    </tr>
    <tr>
      <td>Ngày sinh :</td>
      <td><label for="lstNgay"></label>
        <select name="lstNgay" id="lstNgay">
        </select>
        <label for="lstThang"></label>
        <select name="lstThang" id="lstThang">
        </select>
        <label for="lstNam"></label>
        <select name="lstNam" id="lstNam">
        </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btnDangKi" id="btnDangKi" value="Đăng Kí" /></td>
    </tr>
  </table>
</form>
</body>
</html>