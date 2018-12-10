<html>
<body>
<form method="post">
Name:<input type="text" name="txtname"/><br/>
Mobile No:<input type="text" name="txtmob"/><br/>
<input type="submit" name="btnsub" value="Add"/>
</form>
</body>
</html>
<?php
if(isset($_POST("btnsub"))
{
	echo "Added Information";
}
?>
