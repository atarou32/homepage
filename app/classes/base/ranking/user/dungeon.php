<?php

// ユーザごとのダンジョン探索ランキング(合計)
namespace Base\Ranking\User;

class Dungeon {

  public $number; // 順位
  public $period_id; // 期間
  public $user_id; // ユーザID
  public $dungeon_id; // どのダンジョンか
  public $used_time; // 探索合計時間
  public $calculated_dt; // 計算時刻
  public $dungeon_entry_id;
}
