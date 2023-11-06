<?php
class stock
{
	private $stock;
	private $dbh;

	public function __construct()
	{
		$this->stock = array();
		$this->dbh = new PDO('mysql:host=localhost;dbname=bdcrepas', "root", "");
	}

	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}

	public function lista_stock()
	{
		self::set_names();
		$sql="select id_articulo, id_provedor, nombre_articulo, descripcion, unidad_medida, maximo, minimo, cantidad from tbl_stock ";
		foreach ($this->dbh->query($sql) as $res)
		{
			$this->stock[]=$res;
		}
		return $this->stock;
		$this->dbh=null;
	}
}
?>