<?php

use Phalcon\Mvc\Model;

class Board extends Model
{
	public $id;
	public $ip;
	public $content;
    public $inserted;
}
