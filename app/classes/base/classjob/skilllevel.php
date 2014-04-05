<?php
// レベルスキルのレベルごとの情報
namespace Base\Classjob;

class Skilllevel {
  public $skill_id;
  public $level;
  public $sub_power;
  public $skill_gif_name; // スキル効果のアニメーションの名前
  public $skill_gif_wait_time; // ウェイトの時間？
  public $target_type; // 対象のタイプ
  public $func_type; // 効果のタイプ
  public $sub_need_sp; // 基本となる使用に必要なSP
}
