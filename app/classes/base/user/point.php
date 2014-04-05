<?php
// ユーザのポイントクラス
namespace Base\User;

class Point {

  public $user_id;
  public $gold_point;
  public $silver_point;
  public $copper_point;
  public $spring_kind; // 春の種
  public $summer_kind; // 夏の種
  public $autumn_kind; // 秋の種
  public $winter_kind; // 冬の種
  public $silver_kind; // 銀の種
  public $gold_kind;   // 金の種
  // 花引き換え券は作らない。必ずユーザが親になる（NPCは親にならない）
  // 種を植えて育てるフェーズが必ず必要にする
}

