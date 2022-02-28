
<?php
class db
{
	var $con,$res;
	function connection()
	{
		$this->con=mysqli_connect("localhost","root","");
	mysqli_select_db($this->con,"car");
	
	}
	function exe($sql)
	{
	$this->connection();
	return $this->res=mysqli_query($this->con,$sql);	
	}
}
?>
