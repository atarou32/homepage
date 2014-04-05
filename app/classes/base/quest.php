<?php

// クエストクラス

namespace Base;

class Quest {

  public $quest_id;
  public $is_npc;
  public $is_once;
  public $public_flg;
  public $prev_quest_id;
  public $group_quest_id;
  public $start_dt;
  public $end_dt;
  public $limit_time; // 制限時間があるクエストの場合
  public $quest_type; // 敵を倒せばいいのか、それとも指定ポイントにいけばいいのかとかそういった条件
}
