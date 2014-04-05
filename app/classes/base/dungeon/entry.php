<?php
  // ダンジョンに入って冒険するクラス
namespace Base\Dungeon;

class Entry{
  public $entry_id;
  public $dungeon_id; // どのダンジョンに入ったか
  public $user_id; // 誰が入ったか
  public $entry_dt; // 入った時刻
  public $return_dt; // 戻った時刻
  public $return_flg; // 無事帰還したフラグ
  public $destroy_flg; // 全滅したフラグ
  public $party_id; // 入ったPTのフラグ
}

