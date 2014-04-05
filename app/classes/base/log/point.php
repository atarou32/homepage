<?php
// ポイント使用購入履歴
namespace Base\Log;

class Point {
  public $point_log_id;
  public $user_id;
  public $item_id; // 使用タイプ
  public $info_id1; // 使用タイプごとに使用する値
  public $info_id2; // 使用タイプごとに使用する値
  public $info_id3;
  public $current_gold_point; // 使用購入する前の時点でのポイント
  public $current_silver_point;
  public $current_copper_point;
  // 花引き換え券は作らない。必ずユーザが親になる（NPCは親にならない）
  // 種を植えて育てるフェーズが必ず必要にする
  public $use_gold_point; // 使用購入したポイントの値 -だと購入 +だと使用
  public $use_silver_point;
  public $use_copper_point;
}

