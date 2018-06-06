<?php
    echo $this->Html->css('../app/webroot/css/pages/admin/add',
        ['inline' => false]
    );
    $this->assign('title', 'ユーザー追加ページ');
?>

<div class="user-form">
    <div class="section">

        <h1>Add User</h1>

        <?php echo $this->Form->create('User'); ?>
            <?php echo $this->Form->input('username', [
                    'type' => 'text',
                    'div' => false,
                    'label' => '名前',
                    'placeholder' => 'メールアドレス',
                    'required' => true,
                    'class' => 'form-control',
                ]);

                echo $this->Form->input('password', [
                        'type' => 'password',
                        'div' => false,
                        'label' => 'パスワード',
                        'placeholder' => 'パスワード',
                        'class' => 'form-control',
                    ]);

                echo $this->Form->input('role', [
                    'div' => false,
                    'label' => '権限',
                    'class' => 'form-control input-width220',
                    'options' => [
                    	'admin' => 'Admin',
                    	'author' => 'Author'
                    ]
                ]);

                echo $this->Form->button('追加する', [
                    'type' => 'submit',
                    'div' => false,
                    'label' => false,
                    'value' => 'confirm',
                    'class' => 'btn',
                    'name' => 'mode'
                    ]
                );
            ?>

        <?php echo $this->Form->end(); ?>

    </div>
</div>