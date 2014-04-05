<?php
  // クエストを受けるクラス
namespace Base\Quest;

class Entry{
  public $entry_id;
  public $quest_id; // どのクエストを受けたか
  public $user_id; // 誰が入ったか
  public $entry_dt; // 受けた時刻
  public $result_dt; // 結果が入った時刻
  public $result_flg; // 成功したかどうか
  public $used_time; // どのくらい時間を使ったか
  public $party_id; // 入ったPTのフラグ
  public $silver_point; // 取得したシルバーポイント
}

