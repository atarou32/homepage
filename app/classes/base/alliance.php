<?php 

// 同盟

namespace Base;

class Alliance{

  public $alliance_id; // 同盟ID
  public $del_flg; // 解散したかどうか
  public $member_number; // 人数
  public $name; // 名前
  public $nick_name; // 略称
  public $master_user_id; // 盟主ID
  public $helper_user_id; // 盟主補佐ID
  public $helper_user_id2; // 盟主補佐ID2
  public $helper_user_id3; // 盟主補佐ID3
  public $alliance_level; // 同盟レベル
  public $country_id; //国ID
  public $introduction; //紹介文
  public $recruit_comment; //募集文
  public $total_dead_count; // 死亡した回数
  public $total_dungeon_count; // ダンジョンに出撃した回数(種類は問わない)

}
