<?php
class emp
{
	public $a,$b,$c;
	function sum()
	{
	$this->c=$this->a+$this->b;
	return $this->c;
	}
	function mul()
	{
	$this->c=$this->a*$this->b;
	return $this->c;
	}
}
$employee_information=new emp();
$emp_info->a="SAVIOUR";
$emp_info->b="shubham";
$sal=new emp();
$sal->a=20000;
$sal->b=30000;
echo "employee information 1<br>",$emp_info->a;
echo"<br>";
echo $sal->a;
echo"<br>";
echo "employee information 2<br>" ,$emp_info->b;
echo"<br>";
echo $sal->b;
?>