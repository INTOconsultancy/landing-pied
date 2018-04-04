<?php
class Create_database
{
	protected $pdo;

	public function __construct()
	{
		$this->pdo = new PDO("landingpagepat.cqadeuab6cz9.us-east-1.rds.amazonaws.com", "root", "l4nd1ngp4g3");
	}
	//creamos la base de datos y las tablas que necesitemos
	public function my_db()
	{
        //creamos la base de datos si no existe
		$crear_db = $this->pdo->prepare('CREATE DATABASE IF NOT EXISTS `formulario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci');
		$crear_db->execute();

		//decimos que queremos usar la tabla que acabamos de crear
		if($crear_db):
		$use_db = $this->pdo->prepare('USE `formulario`');
		$use_db->execute();
		endif;

		//si se ha creado la base de datos y estamos en uso de ella creamos las tablas
		if($use_db):
		//creamos la tabla usuarios
		$crear = $this->pdo->prepare('CREATE TABLE `datos` (
      `nombre1` varchar(200) COLLATE utf8_bin NOT NULL,
      `nombre2` varchar(200) COLLATE utf8_bin NOT NULL,
      `email` varchar(200) COLLATE utf8_bin NOT NULL,
      `Zipcode` int(10) NOT NULL,
      `pais` text COLLATE utf8_bin NOT NULL
    )');
		$crear->execute();
		endif;

	}
}
//ejecutamos la función my_db para crear nuestra bd y las tablas
$db = new Create_database();
$db->my_db();
?>
