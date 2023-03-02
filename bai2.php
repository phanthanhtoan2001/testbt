<!DOCTYPE html>
<html>
    <h3> NHÓM 9 </h3>
<?php 
      $a='';
$b='';
$x ='';
	if(isset($_POST["a"]) && isset($_POST["b"]))
	{
		$a = $_POST["a"];
		$b =$_POST["b"];
        if ($a == ''){
            $x = 'Bạn chua nhập số a';
        }
        else if ($b == ''){
            $x = 'Bạn chưa nhập số b';
        }
        else if ($a == 0){
            $x = 'Số a phải nhập khác 0';
        }
        else {
            $x = -($b) / $a;
        }
		// giai pt bac 1
	}
?>
<form name="form1" method="post" action="">
  <table  width="400"  cellspacing="1" cellpadding="1">
    <tr>
      <td colspan="2">GIẢI PHƯƠNG TRÌNH BẬC NHẤT</td>
    </tr>
    <tr>
      <td width="200">PHƯƠNG TRÌNH</td>
      <td width="398">
      <input style = "width: 40px" type="text" name="a" value="<?php echo $a;?>" >
      x + 
      <input style = "width: 40px" type="text" name="b" value="<?php echo $b;?>" > 
      = 0</td>
    </tr>
    <tr>
      <td>NGHIỆM</td>
      <td><label><?php echo $x;?></label>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="button"  value="giải phương trình"></td>
    </tr>
  </table>
</form>
</html>

