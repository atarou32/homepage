<?php
// 訓練場の効果
namespace Base\Train;

class Traintype{
  public $train_id;
  public $train_type_id; // 効果のID
  public $probability; // 確率　（多ければ多いほどあたりやすい）
  public $exp; // もらえる経験値
  public $user_exp; // もらえるユーザ経験値
  public $item_type_id; // もらえるアイテムタイプ(一個だけ)
  public $is_material; // もらえる数えられるアイテムタイプ(複数あり）
  public $copper_energy;
}
