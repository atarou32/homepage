<?php
/*
 * クエリクラス
 *
 * @author saga
 * @created_dt 2013/10/07
 *
 *
 *
 *
 *
 */
namespace Base;

class Query{

	const DEFAULTSTRING = 'DEFAULTSTRINGDAYO';

	private $table_name = null;
	private $select_column = array();
	private $query_where = array();
	private $query_in = array();
	private $query_not_in = array();
	private $query_offset = 0;
	private $query_limit = 50;
	private $query_order_by = array();
	private $model_name = null;

	public function __construct($model_name) {
		$this->model_name = $model_name;
		//$this->table_name = $model_name::table_name;
		//$teble_name = new Mymodel();
	}

	public function select($column_name) {
		$this->select_column[] = $column_name;
		return $this;
	}

	public function where($a, $b, $c = self::DEFAULTSTRING) { 
		if (null === $c) {
			// 単純なwhere句
			$arr = array();
			$arr[$a] = $b;
			$this->query_where[] = $arr;
			return $this;	
		}

		if ('=' === $b) {
			//単純なwhere句
			$arr = array();
			$arr[$a] = $c;
			$this->query_where[] = $arr;
			return $this;
		}
		
		if ('!=' === $b) {
			

	}
}	

}








	

