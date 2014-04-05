<?php

// カード合成クラス

namespace Base;

class Union {
  public $union_id;
  public $user_id; // 誰が合成したか
  public $union_type; // 合成のタイプ スキルレベルアップ合成か経験値付与合成か
  public $base_character_id; // 合成する対象のキャラクター
  public $union_character_id; // 合成に使用する素材のキャラクター
  public $union_sub_character_id1; // 合成に使用する素材のキャラクター
  public $union_sub_character_id2; // 合成に使用する素材のキャラクター
  public $union_sub_character_id3;
  public $union_sub_character_id4;
  public $result_flg; // 成功したらtrue
  public $skill_id; // 対象としたスキル
  public $skill_level; // 対象としたスキルのレベル
  public $exp; // 付与されたEXPの量
  public $used_copper_point;
  public $used_silver_point;
  public $used_gold_point;
}
