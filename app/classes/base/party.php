<?php
// パーティークラス
namespace Base;

class Party{
  public $party_id;
  public $user_id; // どのユーザのパーティーか
  public $character_id1;
  public $character_id2;
  public $character_id3;
  public $character_id4;
  public $character_id5;
  public $character_id6;
  public $party_size; // そのとき結成したパーティーの強さの値
  public $character1_temp_rank;
  public $character2_temp_rank;
  public $character3_temp_rank;
  public $character4_temp_rank;
  public $character5_temp_rank;
  public $character6_temp_rank;
  public $character1_temp_level;
  public $character2_temp_level;
  public $character3_temp_level;
  public $character4_temp_level;
  public $character5_temp_level;
  public $character6_temp_level;
  public $start_dt; // 結成した日付
}
