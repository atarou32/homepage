<?php
  // 訓練場に入って訓練するクラス
namespace Base\Train;

class Entry{
  public $entry_id;
  public $train_id; // どの訓練場に入ったか
  public $user_id; // 誰が入ったか
  public $entry_dt; // 入った時刻
  public $return_dt; // 戻った時刻
  public $return_flg; // 無事帰還したフラグ
  public $character_id; // 入ったキャラクタのID
}

