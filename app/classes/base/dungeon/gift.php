<?php
// ダンジョンに出撃して得た報酬
namespace Base\Dungeon;
class Gift{

  public $gift_id;
  public $entry_id; // どの出撃か
  public $user_id; // 誰がもらったか
  public $gold_energy;
  public $silver_energy;
  public $copper_energy;
  public $enemy_point;
  public $quest_point;
  public $item_flg; // アイテムをもらったかどうか
  public $material_flg; // まとめられるアイテムをもらったかどうか
}
