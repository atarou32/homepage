<?php

/**
 * The Free Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 * 
 * @package  app
 * @extends  Controller
 */

use \Model\Free\Thread;
use \Model\Free\Res;

class Controller_Free extends Controller_Template
{

	public $template = 'template';
	private $site_title ="そこはかとない実験場（徒然ラボ）";
	private function listThreads($title, $summary)
	{
	  // list threads
	  $data = array();
	  $data['rows'] = Thread::find()->get();
	  $this->template->title = $this->site_title;
	  $data['thread_title'] = $title;
	  $data['thread_summary'] = $summary;
	  $data['token_key'] = Config::get('security.csrf_token_key');
	  $data['token'] = Security::fetch_token();
	  $data['thread_title_max'] = Thread::TITLE_MAX;
	  $data['thread_summary_max'] = Thread::SUMMARY_MAX;
	  $link = new Rsslink();
	  $data['rss_link_html'] = $link->loadHtml();
	  $this->template->content = View::forge('free/list', $data, false);

	}

	private function listRes($body, $thread_id)
	{
	  //list res
	  $data = array();
	  $data['rows'] = Res::find()->where('thread_id', $thread_id)->order_by('id', 'ASC')->get();
	  $thread = Thread::find()->where('id', $thread_id)->get_one();
	  $this->template->title = $this->site_title;
	  $data['res_body'] = $body;
	  $data['thread_title'] = $thread['title'];
	  $data['thread_summary'] = $thread['summary'];
	  $data['thread_id'] = $thread_id;
	  $data['token_key'] = Config::get('security.csrf_token_key');
	  $data['token'] = Security::fetch_token();
	  $this->template->content = View::forge('free/res_list', $data);
	}

	private function validateResPost($ip_address, $body)
	{
		$errors = array();
		if (0 === mb_strlen($body)) {
			$errors[] = '内容がありません';
		}
		return $errors;
	}

	private function validateThreadPost($ip_address, $title, $summary)
	{
		$errors = array();

		if (0 === mb_strlen($title)) {
			$errors[] = '題名を入れてください';
		}

		if (Thread::TITLE_MAX < mb_strlen($title)) {
			$errors[] = '題名は'.Thread::TITLE_MAX.'文字までです';
		}

		if (Thread::SUMMARY_MAX < mb_strlen($summary)) {
			$errors[] = '概要は'.Thread::SUMMARY_MAX.'文字までです';
		}

		return $errors;
	}

	public function action_index()
	{
	  $this->listThreads('','');
	}

	public function action_thread($thread_id = null) {
	  if (empty($thread_id)) {
		  Response::redirect('free');
		  return;
	  }

	  $this->listRes('', $thread_id);

	}

	public function action_save_thread()
	{

	  if ("POST" !== $_SERVER['REQUEST_METHOD']) {
	    return Response::redirect('free');
	  }

	  $ip_address = Input::real_ip();
	  $title = Input::post('title');
	  $summary = Input::post('summary');

	  $errors = $this->validateThreadPost($ip_address, $title, $summary);

	  if (!security::check_token()) {
		  $errors[] = '時間切れです';
	  }

	  if (!empty($errors)) {
	    $_SESSION['error'] = array();
	    $_SESSION['error'][] = 'スレッド立てに失敗しました';
	    foreach ($errors as $error) {
	      $_SESSION['error'][] = $error;
	    }



	 
	    $this->listThreads($title, $summary);
	    return;
	  }

	  $thread = Thread::forge();
	  $thread->ipaddress = $ip_address;
	  $thread->title = $title;
	  $thread->summary = $summary;
	  $thread->save();

	  $_SESSION['success'] = 'スレッドを立てました';
	  $this->listThreads('','');
	  return;
	}

	public function action_save_res($thread_id = null)
	{
	  if ("POST" !== $_SERVER['REQUEST_METHOD'] or $thread_id === null) {
	    return Response::redirect('free');
	  }

	  $ip_address = Input::real_ip();
	  $body = Input::post('body');

	  $errors = $this->validateResPost($ip_address, $body, $thread_id);

	  if (!security::check_token()) {
		  $errors[] = '時間切れです';
	  }

	  if (!empty($errors)) {
	    $_SESSION['error'] = array();
	    $_SESSION['error'][] = '投稿に失敗しました';
	    foreach ($errors as $error) {
	      $_SESSION['error'][] = $error;
	    }



	 
	    $this->listRes($body, $thread_id);
	    return;
	  }

	  $res = Res::forge();
	  $res->ipaddress = $ip_address;
	  $res->body = $body;
	  $res->thread_id = $thread_id;

	  try {

	    DB::start_transaction();
	    $thread = Thread::find()->where('id',$thread_id)->get();
	    if (empty($thread)) {
	      throw new Exception('スレッドがありません');
	    }
	    $res->save();
	    DB::commit_transaction();
	  }catch (Exception $e) {
	    DB::rollback_transaction();
	    $_SESSION['error'] = array();
	    $_SESSION['error'][] = '投稿に失敗しました';
	    return Response::redirect('free');
	  }

	  $_SESSION['success'] = '投稿しました';
	  $this->listRes('',$thread_id);
	  return;
	}



	/**
	 * A typical "Hello, Bob!" type example.  This uses a ViewModel to
	 * show how to use them.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_hello()
	{
		return Response::forge(ViewModel::forge('welcome/hello'));
	}

	/**
	 * The 404 action for the application.
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(ViewModel::forge('welcome/404'), 404);
	}
}
