<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ʾ��1</title>
<?php
$action=$_GET["action"];
if ($action=='add')
{
		$Code=trim($_POST["TextBox2"]);
		if(strlen($Code)>1 and $Code==$_SESSION["code"])
			print( "<script>alert('֤ͨ�ɹ�')</script>");
		else
			print( "<script>alert('δ֤ͨ�ɹ�')</script>");
		unset($_SESSION['code']);
}
?>
<script src="js/jquery.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript">
function get(obj) {
    var partten = /^\d{10,13}$/;
    if (!partten.test(document.getElementById("TextBox1").value)) {
        alert('��������ȷ���ֻ�����');
        return;
    }
  obj.disabled = true;
  $.ajax({
      url: "smstest.php",
      type: "Post",
      data: "Tel=" + $("#TextBox1").val(),
      success: function(msg) {
          obj.disabled = false;
          if (msg == "ok") {
              alert("���ɳɹ�!����̶�����ʾ��")
              return;
          }
          if (msg == "error") {
              alert("����ʧ��!����ϵ����Ա")
              return;
          }
          alert(msg);
      }
  })
  
}
</script>
</head>

<body>
<label>
<form id="form1" name="form1" method="post" action="explale.php?action=add">
���ֻ����룺
<input name="TextBox1" type="text" id="TextBox1" />       
<input id="Button1" type="button" value="��ȡ������֤��" onClick="get(this)" />
<br />
<br />
��֤�룺
<input name="TextBox2" type="text" id="TextBox2" /> 
</label>
<br />
<br />
<label>
<input type="submit" name="Submit" value=" ȷ �� " />
</label>
</form>
<p>&nbsp;</p>
</body>
</html>
