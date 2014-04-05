<?php

// キャラクタークラス
namespace Base;

class Character{
  public $character_id;
  public $card_id; // どのカードIDか
  public $name; // そのキャラクターの名前
  public $rank;
  public $level;
  public $class_id; // 職業のID
  public $str;
  public $agi;
  public $int;
  public $def;
  public $status; // 待機中
//（ダンジョンにいける）（宿屋）（やられ中）（枯れ状態)(ダンジョンでやられ中)
  public $maxhp;
  public $maxsp;
  public $dead_dt; // 自然枯れ状態になる時刻
  public $del_flg; // 削除フラグ
  public $user_id; // 所有者のID
  public $parent_user_id; // 親のID
  public $class_point; // クラスポイント(スキル)
  public $dead_count; // やられ回数
  public $dungeon_count; // 出撃した回数（種類は問わない)
  public $exp; //総EXP
  public $got_type; // どこから生まれたか

}
