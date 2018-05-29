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
            <div class="name">
                名前
                <?php echo $this->Form->input('username', [
                        'type' => 'text',
                        'label' => false,
                        'div' => false,
                        'placeholder' => '名前',
                        'required' => false,
                        'class' => 'form-control',
                    ]);
                ?>
            </div>
            <?php

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
                    'class' => 'btn btn-primary',
                    'name' => 'mode'
                    ]
                );
            ?>

        <?php echo $this->Form->end(); ?>

    </div>
</div>