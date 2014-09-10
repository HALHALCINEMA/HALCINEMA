<?php

class Admin extends AppModel {
	//クラス名はファイル名(テーブル名の頭文字大文字単数形)と同じ
	public $name = 'Admin';//モデル名。一応定義しておいてください。

	/*-------------アソシエーション(関連性)-------------------*/
	//belongsToは多対一の定義。
	//この場合Earningモデル(テーブル)は上記の４つのモデルに属していることになる。
	//(Earningテーブルに上記の４つのテーブルの外部キーがある)
	//一対多の定義は$hasManyで同じように行う。(具体例は別モデルを参照)
	public $hasMany = array('News');
	public $recursive = 2;
	//アソシエーションの範囲指定。とりあえずプロトタイプは２で。
	//※正確にはjoinする範囲のこと
	/*--------------------------------------*/

	/*---------------バリデーション(入力値制約)-----------------*/
	//$validateを用いて定義する。この定義内容はモデル内で共有される。

	public $validate = array(
		'admin_name'=> array(
			'rule' => 'notEmpty',
			'message' => '入力必須項目です'
		)
	);
	/*--------------------------------------------*/
}