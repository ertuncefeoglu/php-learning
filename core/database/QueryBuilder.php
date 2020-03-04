<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{

		$statement = $this->pdo->prepare('select * from todos');
		$statement->execute();

		//var_dump($statement->fetchAll(PDO::FETCH_OBJ));
		//return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass );
		return $statement->fetchAll(PDO::FETCH_CLASS );
	}
}