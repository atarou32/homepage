<?php
// 植木のクラス
namespace Base\User;

class Flower {
  public $flower_id;
  public $flower_pot_id;
  public $status;
  public $mature; // どのくらいそだてられたか
  public $kind_type; // どの種から育てられたか
  public $is_opened; // 咲いたかどうか（カードになったかどうか）
  public $opened_dt; // 咲いた時刻
  public $closed_dt; // 枯れて種を取り出した時刻
}
