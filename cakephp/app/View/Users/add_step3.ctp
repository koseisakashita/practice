<?php
    echo $this->Html->css('../app/webroot/css/pages/admin/add',
        ['inline' => false]
    );
    $this->assign('title', 'ユーザー追加 確認ページ');
?>

<div class="user-form-thanks">
    <div class="section">

        <h1>Add User</h1>

        <div>
            下記のユーザーが追加されました。
        </div>

        <div class="name">
            <p>名前</p>
            <p><?php echo $postData['User']['username'];?></p>
        </div>

        <div class="name">
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
            echo $this->Html->link('ログインはこちら', [
                'controller' => 'Users',
                'action' => 'login'
            ]);
        ?>

    </div>
</div>