<?php
// ダンジョンや訓練場に出撃した結果を書いたレポート
namespace Base;

class Report{
  public $report_id;
  public $entry_id;
  public $user_id; // 誰に対して送信されたレポートか
  public $assigned_data; // レポートをつくる際に必要なパラメータ
  public $report_template_type; // レポートの型となるテンプレートのタイプ
  public $open_flg; // 既読かどうか
  public $title;
  public $report_type; // 無事生還したかとか活躍したかなどのフラグ？
  public $wrote_dt; // いつかかれたか

}
