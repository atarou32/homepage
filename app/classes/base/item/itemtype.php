<?php
// アイテムのタイプ
namespace Base\Item;

class Itemtype{
  public $item_type_id;
  public $item_type_type; // 上の別のさらに別
  public $name;
  public $unconfirmed_name; // 未鑑定名
  public $level; // どのくらいのレベルなのか
  public $worth;
  public $power;
  public $func_type;
  public $pound; // 重さ
}
