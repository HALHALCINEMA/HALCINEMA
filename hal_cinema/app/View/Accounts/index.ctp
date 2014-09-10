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

echo $this->Html->css('minHeader');

?>
<?php
if (Configure::read('debug') > 0):
	Debugger::checkSecurityKeys();
endif;
?>
<?php

echo $this->Form->create(null, array('url' => '/accounts/login',
										'inputDefaults' => array(
    										    'label' => false,
        										'div' => false))
	);
	echo $this->Html->image('login_add.png');
	echo $this->Form->input('id', array('type'=>'email'))."<br>";
	echo $this->Html->image('login_pass.png');
	echo $this->Form->input('pass', array('type'=>'password'));
	echo $this->Form->end('ログイン');