<?php
namespace Model\Free;

class Thread extends \Orm\Model {
    protected static $_table_name = 'free_thread_tbl';
    protected static $_primary_key = array('id');

    const TITLE_MAX = 30;
    const SUMMARY_MAX = 250;

  protected static $_properties = array(
    'id',
    'ipaddress',
    'summary',
    'title',
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
