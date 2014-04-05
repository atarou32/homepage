<?php
// クエストを達成して得る報酬
namespace Base\Quest;
class Gift{
  public $quest_id;
  public $gold_energy;
  public $silver_energy;
  public $copper_energy;
  public $item_flg; // アイテムをもらったかどうか
  public $material_flg; // まとめられるアイテムをもらったかどうか
}
