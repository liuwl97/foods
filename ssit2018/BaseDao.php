<?php
class BaseDao {
	protected $db;
	/**
	* 构造方法，连接数据库
	*/
	public function __construct() {
		//echo "构造方法";
		$dsn = "mysql:dbname=db_cook;host=127.0.0.1";
		$dbuser = "root";
		$dbpasswd = "123456";
		try {
			$this->db = new PDO($dsn, $dbuser, $dbpasswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));

		}catch(PDOException $e){
			echo "数据库发生错误：".$e->getMessage();
		}
		
	}
}
?>