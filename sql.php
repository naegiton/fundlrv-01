 <?php
$hostname = "localhost";
$database = "dbfund_lrv";
$username = "root";
$password = "1234";
$cone2010 = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_select_db($database, $cone2010);
mysql_query("set NAMES tis620");

$db_query=mysql_list_tables($database, $cone2010);/* ใช้ฟังก์ชั่น mysql_list_tables เพื่อหาตาราง */
$num_table= mysql_num_rows($db_query); /* นับจำนวนตารางที่พบ */

 @$tbname=$_GET['tbname'];
 if ($tbname=='') {
  	 $tbname=mysql_tablename($db_query,0);
 } else {
 	 $tbname=$_GET['tbname'];
 }

mysql_select_db($database, $cone2010);
$query_rsfield = "SELECT * FROM $tbname  ";
$rsfield = mysql_query($query_rsfield, $cone2010) or die(mysql_error());
$totalfield = mysql_num_fields($rsfield);

$cf=$totalfield-1;

for($cftb=0;$cftb<=$cf;$cftb++) {
//firthfield
$f1=mysql_field_name($rsfield,0);
$vf1="$".mysql_field_name($rsfield,0);
//POST
$postf=@$postf."$".mysql_field_name( $rsfield ,$cftb)."=\$_POST['".mysql_field_name( $rsfield ,$cftb)."']; <br>";
//GET
$getf=@$getf."$".mysql_field_name( $rsfield ,$cftb)."=\$_GET['".mysql_field_name( $rsfield ,$cftb)."']; <br>";
//+=
$vstr=@$vstr."\$t".mysql_field_name( $rsfield ,$cftb)."+=\$row_rsreport['".mysql_field_name( $rsfield ,$cftb)."']; <br>";
//$i
$vstr2=@$vstr2."\$".mysql_field_name( $rsfield ,$cftb)."[\$i]=\$row_rsreport['".mysql_field_name( $rsfield ,$cftb)."']; <br>";
//echo
$tstr=@$tstr."echo \$".mysql_field_name( $rsfield ,$cftb)." ;<br>";
//echo t
$tstr2=@$tstr2."echo \$t".mysql_field_name( $rsfield ,$cftb)." ;<br>";
//=
$vstr5=@$vstr5."\$".mysql_field_name( $rsfield ,$cftb)."=\$row_rsfind['".mysql_field_name( $rsfield ,$cftb)."']; <br>";
$vstr6=@$vstr6."\$".mysql_field_name( $rsfield ,$cftb)."=''; <br>";
//session $_SESSION['s_prakan']=$row_rslogin['prakan'];
$vstr7=@$vstr7."\$_SESSION['s_".mysql_field_name( $rsfield ,$cftb)."']=\$row_rslogin['".mysql_field_name( $rsfield ,$cftb)."']; <br>";
$vstr8=@$vstr8."\$s_".mysql_field_name( $rsfield ,$cftb)."=\$_SESSION['s_".mysql_field_name( $rsfield ,$cftb)."'] <br>";
$vstr9=@$vstr9."echo @\$_SESSION['s_".mysql_field_name( $rsfield ,$cftb)."']; <br>";
$vstr10=@$vstr10."if (\$data['".$cftb."']=='') {\$".mysql_field_name( $rsfield ,$cftb)."=".mysql_field_name( $rsfield ,$cftb).";} else {\$".mysql_field_name( $rsfield ,$cftb)."=\$data['".$cftb."'];}<br>";
 //if ($data['0']=='') {$a=$a; } else { $a=$data['0']; }

          if ($cftb==$cf) {
          //Insert
          $insertf=$insertf."`".mysql_field_name( $rsfield ,$cftb)."`";
          $insertv=$insertv."'$".mysql_field_name( $rsfield ,$cftb)."'";
          //SUM
          $sumf=$sumf."SUM($tbname.".mysql_field_name( $rsfield ,$cftb).") as ".mysql_field_name( $rsfield ,$cftb)."";
          //UPDATE
          $cstr=$cstr."`".mysql_field_name( $rsfield,$cftb)."`='$".mysql_field_name( $rsfield ,$cftb)."'";
          } else {
          //Insert
          $insertf=@$insertf."`".mysql_field_name( $rsfield ,$cftb)."`,";
          $insertv=@$insertv."'$".mysql_field_name( $rsfield ,$cftb)."',";
          //SUM
          $sumf=@$sumf."SUM($tbname.".mysql_field_name( $rsfield ,$cftb).") as ".mysql_field_name( $rsfield ,$cftb).",";
          //UPDATE
          $cstr=@$cstr."`".mysql_field_name( $rsfield ,$cftb)."`='$".mysql_field_name($rsfield ,$cftb)."',";

          }
}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> ฐานข้อมูล <?php echo $database ?>  มีตาราง <?php echo $num_table?> ตาราง </title>

<style type="text/css">

table { font-family: tahoma; font-size: 11pt }
td { font-family: tahoma; font-size: 11pt }
div { font-family: tahoma; font-size: 11pt }
span { font-family: tahoma; font-size: 11pt }
input { font-family: tahoma; font-size: 11pt }
option { font-family: tahoma; font-size: 11pt }
TextArea {font-family : tahoma;font-size : 11pt}
Textbox {font-family : tahoma;font-size : 11pt}
body {
margin-top:0;
margin-left:0;
}

</style>
 <body topmargin="0" leftmargin="0" >

<table width="59%" border="1" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td width="5%" rowspan="6" valign="top" bgcolor="#FFFFFF"><?php
 $a=0;
while($a < $num_table ) {
 $tb[$a]=mysql_tablename($db_query,$a);
?>
        <a href="?tbname=<?php echo  $tb[$a];?>">
          <?php  echo  $tb[$a]; ?>
        </a> <br />
        <?php
 $a++;
 }
?></td>
      <td height="134" colspan="3" align="left" valign="top" bgcolor="#FFFFFF">
      <textarea name="t1" cols="150" rows="5" class="lbbB" id="t1"><?php  echo "INSERT INTO $tbname  ($insertf) VALUES ($insertv)" ; ?>
      </textarea>
        <br />
        <textarea name="t2" cols="150" rows="5" class="lbbB" id="t1"><?php  echo  "UPDATE `$tbname` SET  $cstr  WHERE (`vmonth`='\$vmonth'   )"; ?>
        </textarea>
        <br />
        <textarea name="textfield" cols="150" rows="3" class="lbbB"><?php  echo  "DELETE FROM `$tbname`  WHERE  (`vmonth`='\$vmonth'   )"; ?>
        </textarea>
        <br />
        <textarea name="textfield" cols="150" rows="3" class="lbbB"> <?php  echo  "SELECT *  FROM `$tbname`  WHERE  (`vmonth`='\$vmonth'  )"; ?>
        </textarea>
        <br /></td>
    </tr>
    <tr>
      <td width="19%" align="left" valign="top" bgcolor="#FFFFFF"><?php  echo  "$postf"; ?></td>
      <td width="19%" align="left" valign="top" bgcolor="#FFFFFF"><?php  echo  " $getf"; ?></td>
      <td width="24%" align="left" valign="top" bgcolor="#FFFFFF"><?php  echo  " $tstr "; ?></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><?php  echo  " $vstr5"; ?></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><?php  echo  " $vstr2 "; ?></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><?php  echo  " $vstr6"; ?></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><br />
        <table border="0" align="center" cellpadding="1" cellspacing="1">
          <?php  for($lin=0;$lin<=$cf;$lin++) { ?>
          <tr>
            <td><?php echo mysql_field_name($rsfield ,$lin) ?></td>
            <td><input type="text" name="<?php echo mysql_field_name($rsfield ,$lin) ?>" size="30" class="lbbB" / ></td>
          </tr>
          <?php } ?>
        </table>
        <br />
        <br /></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><br />
        <table border="0" align="center" cellpadding="1" cellspacing="1">
          <?php  for($lin=0;$lin<=$cf;$lin++) { ?>
          <tr>
            <td><?php echo mysql_field_name($rsfield ,$lin) ?></td>
            <td><input name="<?php echo mysql_field_name($rsfield ,$lin) ?>"  id="<?php echo mysql_field_name($rsfield ,$lin) ?>" type="text" value="<?php echo '<?php echo $'.mysql_field_name($rsfield ,$lin).' ?>'?>" size="30" class="lbbB"  /></td>
          </tr>
          <?php } ?>
        </table>
        <br /></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><br />
        <table border="0" align="left" cellpadding="1" cellspacing="1">
          <?php  for($lin=0;$lin<=$cf;$lin++) { ?>
          <tr>
            <td><?php echo mysql_field_name($rsfield ,$lin) ?></td>
            <td><input name="<?php echo mysql_field_name($rsfield ,$lin) ?>" type="text" value="<?php echo '<?php echo $row_rsedit[\''.mysql_field_name($rsfield ,$lin).'\']; ?>'?>" size="30" class="lbbB" /><br />
</td>
          </tr>
          <?php } ?>
        </table></td>
    </tr>
    <tr>
      <td align="left" valign="top" bgcolor="#FFFFFF"><?php echo $vstr7; ?></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><?php echo $vstr8; ?></td>
      <td align="left" valign="top" bgcolor="#FFFFFF"><?php echo $vstr9; ?></td>
    </tr>
    <tr>
      <td colspan="2" align="left" valign="top" bgcolor="#FFFFFF"><?php echo $vstr10; ?></td>
      <td align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
</table>
</body>
</html>
<?php
  mysql_close();
  ?>
