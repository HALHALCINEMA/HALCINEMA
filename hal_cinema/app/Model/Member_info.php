<?php

class Member_info extends AppModel {
	//クラス名はファイル名(テーブル名の頭文字大文字単数形)と同じ
	public $name = 'Member_info';//モデル名。一応定義しておいてください。

	/*-------------アソシエーション(関連性)-------------------*/
	public $belongsTo = array('Movie_genre');
	public $hasMany = array('Earning','Review','Submit');
	//belongsToは多対一の定義。
	//この場合Earningモデル(テーブル)は上記の４つのモデルに属していることになる。
	//(Earningテーブルに上記の４つのテーブルの外部キーがある)
	//一対多の定義は$hasManyで同じように行う。(具体例は別モデルを参照)
	
	public $recursive = 2;
	//アソシエーションの範囲指定。とりあえずプロトタイプは２で。
	//※正確にはjoinする範囲のこと
	/*--------------------------------------*/

	/*---------------バリデーション(入力値制約)-----------------*/
	//$validateを用いて定義する。この定義内容はモデル内で共有される。

	public $validate = array(
		'password'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'user_name'=> array(//ルールを指定するカラム名を指定
			'rule' => 'notEmpty',//具体的なルールを記載。ここでは入力必須を設定。
			'message' => '入力必須項目です'
		),
		'handle_name'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'birth_date'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'address'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'tell'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'family'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'mail_address'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'movie_genre_id'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'credit_info'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'favorite_sheet'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		)
	);
	/*--------------------------------------------*/
}
