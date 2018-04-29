<?php
//include_once "My_DBDirect.php";
include_once "ConnectionToDB.php";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delta";

$conn = new mysqli($servername, $username, $password, $dbname);

class UserType
{
	public $ID;
	public $Position;
	public $ArrayOfPages;
	function __construct($id)
	{
		if ($id !="")
		{
			$sql="select * from usertype where ID=$id";
			$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delta";
		$conn = new mysqli($servername, $username, $password, $dbname);
			$result=mysqli_query($conn,$sql);
			if ($row = mysqli_fetch_array($result))
			{
				$this->Position=$row["Position"];
				$this->ID=$row["ID"];
				$sql="select PageID from usertypepage where UserTypeID=$this->ID order by order";
				//echo $sql;
				$result=mysqli_query($conn,$sql);
				$i=0;
				while($row1=mysqli_fetch_array($result))
				{
					$this->ArrayOfPages[$i]=new pages($row1[0]);
					$i++;
				}

			}

		}
	}
	static function SelectAllUserTypesInDB()
	{
		$sql="select * from usertype";
		//mysql_query($sql);
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delta";
		$conn = new mysqli($servername, $username, $password, $dbname);
		$TypeDataSet = mysqli_query($conn,$sql) or die(mysql_error());

		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($TypeDataSet))
		{
			$MyObj= new UserType($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delta";

$con = new mysqli($servername, $username, $password, $dbname);
class pages
{
	public $ID;
	public $Name;
	public $PhysicalID;
	public $HTML;

	function __construct($id)
	{
		if ($id !="")
		{
			$sql="select * from pages where ID=$id";
			//echo $sql;
			$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delta";
		$con = new mysqli($servername, $username, $password, $dbname);
			$result2=mysqli_query($con,$sql) or die(mysql_error());
			if ($row2 = mysqli_fetch_array($result2))
			{
				$this->Name=$row2["Name"];
				$this->PhysicalID=$row2["PhysicalID"];
				$this->HTML=$row2["HTML"];
				$this->ID=$row2["ID"];
			}

		}
	}
	static function SelectAllPagesInDB()
	{
		$sql="select * from pages";
		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "delta";
		$con = new mysqli($servername, $username, $password, $dbname);
		$PageDataSet = mysqli_query($con,$sql) or die(mysqli_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($PageDataSet))
		{
			$MyObj= new pages($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
	}

}

?>
