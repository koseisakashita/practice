<?php
    echo $this->Html->css('../app/webroot/css/pages/admin/add',
        ['inline' => false]
    );
    $this->assign('title', 'ユーザー追加 入力ページ');
?>

<div class="user-form-add">
    <div class="section">

        <h1>ユーザー追加</h1>

        <?php echo $this->Form->create('User'); ?>
            <dl class="input-name">
                <dt>名前</dt>
                <dd>
                    <?php echo $this->Form->input('username', [
                            'type' => 'text',
                            'label' => false,
                            'div' => false,
                            'placeholder' => '名前',
                            'required' => false,
                            'class' => 'form-control',
                        ]);
                    ?>
                </dd>
            </dl>
            <dl class="input-password">
                <dt>パスワード</dt>
                <dd>
                    <?php
                    echo $this->Form->input('password', [
                            'type' => 'password',
                            'div' => false,
                            'label' => false,
                            'placeholder' => 'パスワード',
                            'class' => 'form-control',
                            'autocomplete' => 'off'
                        ]);
                    ?>
                </dd>
            </dl>
            <dl class="input-role">
                <dt>権限</dt>
                <dd>
                    <?php
                        echo $this->Form->input('role', [
                            'div' => false,
                            'label' => false,
                            'class' => 'input-width180 form-control',
                            'options' => [
                            	'admin' => 'Admin',
                            	'author' => 'Author'
                            ]
                        ]);
                    ?>
                </dd>
            </dl>
            <div class="submit-btn">
                <?php
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
            </div>
            <div class="login-link">
                <?php
                    echo $this->Html->link('ログインはこちら', [
                        'controller' => 'users',
                        'action' => 'login',
                    ]);
                ?>
            </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>