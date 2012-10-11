<?php

Class Cliente {
	
	protected static $db_fields = array('nome','email','telefone','id');
	
	public static $table_name = "clientes";
	public $nome;
	public $login;
	public $senha;
	public $email;
	public $telefone;
	public $id;


	public function authenticate($login,$senha) {
		$sql = "SELECT * FROM ".self::$table_name." ";
		$sql .= "WHERE login='{$login}' AND senha='{$senha}' LIMIT 1";
		echo $sql;
		$user = self::find_by_sql($sql);
		return empty($user) ? false : array_shift($user);
	}
	public function logout(){
          unset($_SESSION['user_id']);
	    unset($_SESSION['login']);
	}
		
	public static function find_all() {
		$result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." ");
		return $result_array;
		}
	
	public static function find_by_id($id=0) {
		$users = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE id={$id} LIMIT 1");
		return empty($users) ? false : array_shift($users);
		}
	
	public static function find_by_sql($sql="") {
		global $database;
		$query = $database->query($sql);
		$object_array = array();
		while ($row = $database->fetch_array($query)){
			$object_array[] = self::instantiate($row);  
			}
		return $object_array;
		}

	
	public static function instantiate($record) {
		$object = new self;
		foreach ($record as $attribute => $value) {
			if($object->has_attribute($object,$attribute) ) {
				$object->$attribute = $value;
			}
		}
		return $object;
	}

	private function has_attribute($object,$attribute) {
		$attributes = get_object_vars($object);
		return array_key_exists($attribute,$attributes);
		}
		
	
	public function create() {
		global $database;
		$attributes = self::sanitized_attributes($this);
		$sql = "INSERT INTO ".self::$table_name." ( ";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ( '";
		$sql .= join("','", array_values($attributes));
		$sql .= "')";
		if(!$database->query($sql)) {
			echo mysql_error();
			}
	}

	public function update() {
		global $database;
		$attributes = self::sanitized_attributes($this);
		$attributes_pairs = array();
		foreach($attributes as $key=>$value) {
			$attributes_pairs[] = "{$key} = '{$value}'";
			}
		$sql = "UPDATE ".self::$table_name." SET ";
		$sql .= join(" , ",$attributes_pairs);
		$sql .= " WHERE id=$this->id" ;
		if(!$database->query($sql)) {
			echo mysql_error();
			}
		}

	public function delete() {
		global $database;
		$sql = "DELETE FROM clientes WHERE id=$this->id";
		if(!$database->query($sql)) {
			echo mysql_error();
			}
		}
	
	protected static function attributes($object) {
		$atributtes = array();
		foreach(self::$db_fields as $field) {
			if(property_exists($object,$field)) {
				$atributtes[$field] = $object->$field;
				}
			}
		return $atributtes;	
	}
	
	protected function sanitized_attributes($object) {
		global $database;
		$clean_attributes = array();
		foreach($this->attributes($object) as $key=>$value) {
			$clean_attributes[$key] = $value;
			}
		return $clean_attributes;	
	}
	
}
?>
