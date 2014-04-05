<?php

// 同盟内チャット
namespace Base\Alliance;

class Chat{
  public $alliance_id;
  public $id; // 発言のID
  public $user_id; // ユーザID
  public $comment; //発言内容
  public $comment_dt; // 発言時刻
}
