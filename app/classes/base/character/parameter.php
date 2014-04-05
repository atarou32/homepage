<?php

 // キャラクターと敵のパラメータ

class Parameter{
  public $id; // キャラクターIDか敵IDか
  public $hp;
  public $maxhp;
  public $sp;
  public $maxsp;
  public $attack;
  public $defense;
  public $magic_attack;
  public $magic_defense;
  public $status; // 毒状態など
  public $agi;
  public $stb;
  public $luck;

  public $is_enemy = false; // キャラクターか敵か
}
