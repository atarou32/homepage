<?php

// 同盟ごとのクエストの結果集計
namespace Base\Alliance;

class Questresult{

  public $alliance_id; // クエストを受けた同盟
  public $quest_type; // クエストのタイプ
  public $result_count; // 指定されたクエストのタイプのクリアされた回数
  public $result_amount; // クエストのポイント

}
