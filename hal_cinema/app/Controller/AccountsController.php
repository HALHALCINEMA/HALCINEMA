<?php

class AccountsController extends AppController{
	
	public $name = 'Accounts';//コントローラ名
	//使用するモデル
	//var $uses = array('User');

	//public $scaffold;

	//helpersを継承
	public $helpers = array('Html', 'Form');

	// ビューを使わないように設定
    //public $autoRender = false;

    public function index(){//これでアクションを定義できる
    	//同じ名前のビューファイルがあるとそこに表示される

    }
}