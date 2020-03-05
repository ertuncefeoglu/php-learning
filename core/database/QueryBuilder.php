<?php

class QueryBuilder
{
	protected $pdo;

	public function __construct($pdo) {
		$this->pdo = $pdo;
	}

	public function selectAll($table)
	{

		$statement = $this->pdo->prepare("select * from {$table}");
		$statement->execute();

		//var_dump($statement->fetchAll(PDO::FETCH_OBJ));
		//return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass );
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	public function insert($table, $parameters)
	{

		$columns = implode(',', array_keys($parameters));
		$stub = ':'. implode(',:', array_keys($parameters));
		/*
			array_map(function($param) {
				return ":{$param}"
			}, $parameters)
		*/
		//var_dump($columns);die;
		$sql = sprintf('insert into %s (%s) values(%s)', $table, $columns, $stub );
		//var_dump($sql); die;
		$statement = $this->pdo->prepare($sql);

		try {
			$statement->execute($parameters);
		} catch (PDOException $e) {
			die($e->getMessage()." Error in query execution");
		}

	}
}