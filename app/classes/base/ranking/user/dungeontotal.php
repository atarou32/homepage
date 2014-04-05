<?php

// ユーザごとのダンジョン探索ランキング(合計)
namespace Base\Ranking\User;

class Dungeontotal {

  public $number; // 順位
  public $period_id; // 期間
  public $user_id; // ユーザID
  public $dungeon_id; // どのダンジョンか
  public $used_time; // 探索合計時間
  public $total_enemy_point; // 敵撃破ポイント
  public $enemy_count; // 討伐敵数
  public $dead_count; // やられ回数
  public $dungeon_count; // 出撃回数
  public $calculated_dt; // 計算時刻
}
