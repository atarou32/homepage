<?php
namespace Base;

// ひとつずつに分けられるアイテムのベースクラス
class Item{
  public $item_id;
  public $user_id; // 誰が持っているか
  public $equip_flg; // 誰かに装備されているかどうか
  public $item_type_id;// 武器、鎧、盾などの区別
  public $got_type; // どこで取得したか
  public $got_type_type; // どこで取得したかの別の別を表すパラメータ
  public $del_flg; // 消去フラグ
  public $got_dt; // 取得時刻
}
