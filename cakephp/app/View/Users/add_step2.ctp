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
                ]);

                echo $this->Form->input('password', [
                        'type' => 'hidden',
                    ]);

                echo $this->Form->input('role', [
                    'type' => 'hidden',
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
            <div class="confirm-btns">
                <?php
                    echo $this->Form->button('訂正する', [
                        'type' => 'submit',
                        'div' => false,
                        'label' => false,
                        'value' => 'back',
                        'class' => 'btn btn-default back',
                        'name' => 'mode'
                        ]
                    );
                ?>
                <?php
                    echo $this->Form->button('追加する', [
                        'type' => 'submit',
                        'div' => false,
                        'label' => false,
                        'value' => 'do',
                        'class' => 'btn btn-primary add',
                        'name' => 'mode'
                        ]
                    );
                ?>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>