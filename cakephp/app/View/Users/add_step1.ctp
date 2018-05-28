<?php
    echo $this->Html->css('../app/webroot/css/pages/admin/add',
        ['inline' => false]
    );
    $this->assign('title', 'ユーザー追加 入力ページ');
?>

<div class="user-form-add">
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
                        'class' => 'form-control'
                    ]);

                echo $this->Form->input('role', [
                    'div' => false,
                    'label' => '権限',
                    'class' => 'form-control',
                    'options' => [
                    	'admin' => 'Admin',
                    	'author' => 'Author'
                    ]
                ]);

                echo $this->Form->button('次へ', [
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