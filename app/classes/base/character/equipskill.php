<?php

// キャラクターがスキルを覚えているかどうか装備しているかどうか
namespace Base\Character;

class SkillEquip{
  public $character_id;
  public $skill_id;
  public $active_flg;  // 装備しているかどうか
  public $skill_level;
}

