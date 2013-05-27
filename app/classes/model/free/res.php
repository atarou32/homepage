<?php
namespace Model\Free;

class Res extends \Orm\Model {
    protected static $_table_name = 'free_res_tbl';
    protected static $_primary_key = array('id');

    protected static $_properties = array(
      'id',
      'ipaddress',
      'body',
      'thread_id',
      'created_at',
      'updated_at',
    );
    protected static $_observers = array(
      'Orm\Observer_CreatedAt' => array(
        'events' => array('before_insert'),
        'mysql_timestamp' => false,
      ),
      'Orm\Observer_UpdatedAt' => array(
        'events' => array('before_save'),
        'mysql_timestamp' => false,
      ),
    );
}
