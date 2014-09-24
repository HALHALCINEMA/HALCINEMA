<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<div id="login-box">
	会員の方はこちら
<?php

			if (isset($error)) {
				echo $error;
			}

			echo $this->Form->create('Member_info', array(//フォーム生成開始
				'id' => 'info',//フォームタグにつけるid
				'inputDefaults' => array(
					    'label' => false,//labelタグはつけない
						'div' => false))//デフォルトで表示されるdivは表示しない
			);
			
			//email(ID)入力欄
			echo $this->Form->label('id', 'メンバーID');
			echo $this->Form->input('id', array('type'=>'email'));
			
			//パスワード入力欄
			echo $this->Form->label('password', 'パスワード');
			echo $this->Form->input('password', array('type'=>'password'));
			

			$buttonStyle = 'display:block;width:150px;height:150px;margin:0 auto;';
			echo $this->Form->submit('送信',array('type' => 'submit',
																'id' => 'add'));
			echo $this->Form->end();

?>
</div>