<?php
    echo $this->Html->css('../app/webroot/css/pages/admin/add',
        ['inline' => false]
    );
    $this->assign('title', 'ユーザー追加 確認ページ');
?>

<div class="user-form-confirm">
    <div class="section">

        <h1>Add User</h1>

        <?php echo $this->Form->create('User'); ?>
            <?php echo $this->Form->input('username', [
                    'type' => 'hidden',
                    'div' => false,
                    'label' => '名前',
                    'placeholder' => 'メールアドレス',
                    'required' => true,
                    'class' => 'form-control',
                ]);

                echo $this->Form->input('password', [
                        'type' => 'hidden',
                        'div' => false,
                        'label' => 'パスワード',
                        'placeholder' => 'パスワード',
                        'class' => 'form-control'
                    ]);

                echo $this->Form->input('role', [
                    'type' => 'hidden',
                    'div' => false,
                    'label' => '権限',
                    'class' => 'form-control',
                    'options' => [
                    	'admin' => 'Admin',
                    	'author' => 'Author'
                    ]
                ]);
            ?>
            <div class="name">
                <p>名前</p>
                <p><?php echo $postData['User']['username'];?></p>
            </div>
            <div class="password">
                <p>パスワード</p>
                <p>
                    <?php
                        $length =  strlen($postData['User']['password']);
                        for($i = 0;$i < $length;$i++){
                            echo '*';
                        }
                    ?>
                </p>
            </div>
            <div class="role">
                <p>権限</p>
                <p><?php echo $postData['User']['role'];?>
                </p>
            </div>
            <?php
                echo $this->Form->button('追加する', [
                    'type' => 'hidden',
                    'div' => false,
                    'label' => false,
                    'value' => 'do',
                    'class' => 'btn',
                    'name' => 'mode'
                    ]
                );
            ?>
        <?php echo $this->Form->end(); ?>
    </div>
</div>