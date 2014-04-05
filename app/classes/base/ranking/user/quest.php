<?php
// クエスト達成のランキング

namespace Base\Ranking\User;

class Quest {
  public $number; // 順位
  public $period_id; // 期間
  public $user_id; // ユーザID
  public $quest_id;
  public $return_dt; // 帰還した時刻
  public $used_time; // 使った時間
  public $calculated_dt; // 計算された時刻
}
