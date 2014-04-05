<?php

// 同盟掲示板のレス
namespace Base\Alliance;

class Bbsres{

 public $bbs_res_id;
 public $bbs_id; // 掲示板のID
 public $user_id; //投稿者のID
 public $body; //投稿内容
 public $del_flg; //消去フラグ
 public $sort; //何番目のレスか
}
