<?php

class Schedule extends AppModel {
	//クラス名はファイル名(テーブル名の頭文字大文字単数形)と同じ
	public $name = 'Schedule';//モデル名。一応定義しておいてください。

	/*-------------アソシエーション(関連性)-------------------*/
	public $hasMany = array('Earning');
	public $belongsTo = array('Movie','Screen');
	public $recursive = 2;
	/*--------------------------------------*/

	/*---------------バリデーション(入力値制約)-----------------*/
	//$validateを用いて定義する。この定義内容はモデル内で共有される。

	public $validate = array(
	);
	/*--------------------------------------------*/
}
