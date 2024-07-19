<?php



class model
{
	public $conn = "";

	function __construct()
	{
		// hostname // username // pass // db name
		$this->conn = new mysqli('localhost', 'root', '', 'project');
	}
	function select($tbl)
	{
		$sel = " SELECT * from $tbl";
		$run = $this->conn->query($sel);
		while ($data = $run->fetch_object()) {
			$arr[] = $data;
		}
		return $arr;
	}
	// INSERT CODE VIA WEBSITE TO SQL
	function insert($tbl, $arr)
	{
		$col_arr = array_keys($arr);
		$col = implode(",", $col_arr);

		$value_arr = array_values($arr);
		$value = implode("','", $value_arr);

		$ins = "INSERT INTO $tbl ($col) values ('$value')";
		$run = $this->conn->query($ins);
		return $run;
	}
	// login code
	function select_where($tbl, $where)
	{
		$col_w = array_keys($where);
		$value_w = array_values($where);

		$sel = "select * from $tbl where 1=1"; // 1=1 means query continue
		$i = 0;
		foreach ($where as $w) {
			$sel .= " and $col_w[$i]='$value_w[$i]'";
			$i++;
		}
		$run = $this->conn->query($sel);
		return $run;
	}
}
$obj = new model
	?>