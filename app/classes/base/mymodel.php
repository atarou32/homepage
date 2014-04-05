<?php
/*
 * モデルクラス
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

use Fuel\Core\Cache;
class Mymodel extends \Model_Crud{
	protected static $_table_name;
	protected static $_primary_key;

	protected static $column_array;
	protected static $relation;
	public function __construct() {
		$test = new Query('unko');
		$tes = Cache::forge('test');
	}
}

