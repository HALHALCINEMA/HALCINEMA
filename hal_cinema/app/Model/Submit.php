<?php

class Submit extends AppModel {
	//クラス名はファイル名(テーブル名の頭文字大文字単数形)と同じ
	public $name = 'Submit';//モデル名。一応定義しておいてください。

	/*-------------アソシエーション(関連性)-------------------*/
	public $belongsTo = array('Submit_genre','Member_info');
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
		'submit_genre_id'=> array(//ルールを指定するカラム名を指定
			'rule' => 'notEmpty',//具体的なルールを記載。ここでは入力必須を設定。
			'message' => '入力必須項目です'
		),
		'member_info_id'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'submit_content'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'title'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		),
		'date'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		)
	);
	/*--------------------------------------------*/
}
