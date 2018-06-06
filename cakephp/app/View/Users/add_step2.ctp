<?php
    echo $this->Html->css('../app/webroot/css/pages/admin/add',
        ['inline' => false]
    );
    $this->assign('title', 'ユーザー追加 確認ページ');
?>

<div class="user-form-confirm">
    <div class="section">

        <h1>ユーザー追加</h1>

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

            <dl class="name">
                <dt>名前</dt>
                <dd>
                    <?php echo $postData['User']['username'];?>
                </dd>
            </dl>
            <dl class="password">
                <dt>パスワード</dt>
                <dd>
                    <?php
                        $length =  strlen($postData['User']['password']);
                        for($i = 0;$i < $length;$i++){
                            echo '*';
                        }
                    ?>
                </dd>
            </dl>

            <dl class="password">
                <dt>権限</dt>
                <dd>
                    <?php echo $postData['User']['role'];?>
                </dd>
            </dl>

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
                        'class' => 'btn add',
                        'name' => 'mode'
                        ]
                    );
                ?>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>