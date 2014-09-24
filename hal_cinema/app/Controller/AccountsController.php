<?php

class AccountsController extends AppController{
    
    public $name = 'Accounts';//コントローラ名
    //使用するモデル
    var $uses = array('Member_info');

    //public $scaffold;

    //helpersを継承
    public $helpers = array('Html', 'Form');

    // ビューを使わないように設定
    //public $autoRender = false;

    public function index(){//これでアクションを定義できる
        //同じ名前のビューファイルがあるとそこに表示される

        

    }

    public function login($params = 0){
        $this -> set('title_for_layout', 'HALシネマ');

        //ポストデータを取得
        $postData = $this->request->data;

        //ログインに失敗してリダイレクトされた時のエラー文セット
        if (isset($params) && $params == 1) {
            $error = "IDまたはパスワードが間違っています";
            $this->set('error', $error );
        }
        
        if ($postData != array()) {//Postでのアクセスならばログイン処理を行う
            //ユーザ検索関数呼び出しコード
            $userCheckCode = $this->Member_info->userCheck($postData["Member_info"]["id"],$postData["Member_info"]["password"]);

            //ログイン判定
            if ($userCheckCode == null) {
                $error = '1';
                $this->redirect(array('action' => 'login', $error ));
            }else{
                //sessionにuser_idをセット
                $this->Session->write('member_id', $userCheckCode[0]['Member_info']['id']);//member_idをセッションに保存
                $this->redirect(array('action' => 'index'));
            }
            //debug($userCheckCode); 
        }
    }

    public function logout($params = 0){
        $this->Session->delete('user_id');
        $this->Session->destroy();
        $this->redirect('/');//indexページヘリダイレクト
    }
}