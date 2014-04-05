<?php
 // 敵情報
namespace Base;

class Enemy{
  public $enemy_id; // 敵ID
  public $enemy_name; // 敵の名前
  public $enemy_comment; // 敵の説明
  public $enemy_unconfirmed_name; // 未確定名
  public $enemy_type; // 敵タイプ
  public $rarity; // レアリティ
  public $public_flg; // 登場させるかどうか
  public $image_name; // 画像名
  public $birth_season; // 属性
  public $keyword;
  public $attack;
  public $defense;
  public $magic_attack;
  public $magic_defense;
  public $agi;
  public $stb;
  public $str;
  public $def;
  public $int;
  public $agi;
  public $maxhp;
  public $maxsp;
  public $level; // 強さのレベル
  public $exp;
  public $treasure_level; // 落とす宝箱のレベル
  public $enemy_point; // 撃破ポイント
}
