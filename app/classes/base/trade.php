<?php

/*
 * 取引に関するクラス
 *
 *
 *
 *
 */
namespace Base;

class Trade {

 /*
  * プロパティ
  *
  *
  */
 public $trade_id; // ID
 public $trade_exhibit_id; // 出品に関するID
 public $trade_successful_bid_id; //落札に関するID
 public $start_dt; // 取引所に並ぶ日付
 public $end_dt;   // 取引所からなくなる日付
 public $public_flg; // 取引所で公開しているかどうか
 public $cancel_dt; // キャンセルした日付
 public $cancel_flg; // キャンセルしたかどうか
 public $win_flg; // 落札されたかどうか
 public $win_dt; // 落札された日付
 // 落札と同時にユーザのプレゼントボックスに並ぶ
}
