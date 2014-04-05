<?php

 // 入札
namespace Base\Trade;

class Bid{
  public $trade_bid_id;
  public $trade_id; // どの取引に対しての入札か
  public $user_id; // 誰が入札したか
  public $bid_dt; // 入札した日付
  public $coin; // 入札に使ったお金
  public $coin_return_flg; // 入札に失敗して戻ったかどうか
  public $coin_return_dt; // 入札に失敗して戻ってきた時刻

}













}
