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
	/**
	 * The basic welcome message
	 * 
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		// list threads
		$data = array();
		$data['rows'] = Thread::find_all();
		$this->template->title = "そこはかとない実験場（徒然ラボ）";
		$this->template->content = View::forge('free/list', $data);
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
