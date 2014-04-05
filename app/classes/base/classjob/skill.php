<?php
// スキルを覚えるのに必要な条件など
namespace Base\Classjob;

class Skill{
  public $skill_id;
  public $is_level; // レベル制かどうか
  public $is_passive; // パッシブスキルかどうか
  public $skill_name; // スキルの名前
  public $skill_comment; // スキルの説明
  public $skill_image_name; // スキルアイコンの名前
  public $skill_gif_name; // スキル効果のアニメーションの名前
  public $skill_gif_wait_time; // ウェイトの時間？
  public $target_type; // 対象のタイプ
  public $func_type; // 効果のタイプ
  public $base_power; // 基本となる力
  public $base_need_sp; // 基本となる使用に必要なSP
}
