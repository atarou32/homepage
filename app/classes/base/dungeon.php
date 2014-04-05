<?php

// ダンジョンクラス
namespace Base;

class Dungeon{

  public $dungeon_id;
  public $start_dt; // 公開時刻
  public $end_dt; // 終了時刻
  public $floor_count; // 階数
  public $estimated_level; // 推奨レベル
  public $public_flg; // 公開フラグ
  public $dungeon_count; // 総探索回数
  public $clear_count; // クリア回数
  public $image_name; // 画像名
  public $name; // ダンジョン名
  public $comment; // 説明

}
