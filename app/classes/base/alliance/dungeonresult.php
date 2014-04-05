<?php

// 同盟ごとのダンジョンの探索結果集計
namespace Base\Alliance;

class Dungeonresult{

  public $alliance_id;
  public $result_type; // 敵タイプごとの討伐数　合計
  public $result_count;
  public $result_enemy_point;

}
