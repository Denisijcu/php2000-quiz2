<?php

use Phalcon\Mvc\Controller;

class CollaborateController extends Controller
{
	public function indexAction()
	{
        $board = Board::find();

		// send data to the view
		$this->view->board = $board;
    }

    public function saveAction()
	{
        // get variables from POST
        $text = $this->request->get('text');

		// save the new user in the DB
        $board = new Board();
        $board->ip = $_SERVER['REMOTE_ADDR'];
		$board->content = $text;
        $board->save();

		// redirect to user list
	    $this->response->redirect('/collaborate');
	}
}