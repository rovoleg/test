<?php 
	class Tools{
		static function connect($host, $user, $pass, $dbname){
			//строка подключения
			$dsn='mysql:host='.$host.';dbname='.$dbname.';charset=utf8;';
			//массив с исключениями
			$options=array(
					 PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
					 PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
					 PDO::MYSQL_ATTR_INIT_COMMAND=>'set names utf8');
			//создаем объект pdo
			$pdo=new PDO($dsn, $user, $pass, $options);
			return $pdo;
		}

		static function createTable($query){
			$pdo=Tools::connect('localhost', 'root', '', 'storeRov');
			$pdo->query($query);
		}


	}

 ?>