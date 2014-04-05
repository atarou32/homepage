<?php

//ダンジョンの討伐総合結果
namespace Base\Dungeon;

class Totaldefeat{

  public $entry_id;
  public $total_enemy_point; // 敵撃破ポイント
  public $time_used; // 出撃から帰還までにかかった時間(秒）
  public $rank; // 討伐評価
  public $floor; // 到達階数
  public $enemy_count; // 討伐敵数
  public $dead_count; // やられ回数
  public $total_quest_point; // 達成したクエストによりもらえるポイント
  public $party_size; // そのときのパーティーの規模
}
