<?php
	echo $this->Html->css('../app/webroot/css/pages/admin/login',
		['inline' => false]
	);
    echo $this->Html->script('../app/webroot/js/main', ['inline' => false]);
	$this->assign('title', '投稿一覧');
?>


<h1>投稿一覧</h1>
<p><?php echo $this->Html->link('投稿を追加する',['action' => 'add'], ['class' => 'btn btn-primary']); ?></p>
<table>
    <tr>
        <th>id</th>
        <th>タイトル</th>
        <th>編集</th>
        <th>削除</th>
        <th>作成日時</th>
    </tr>

<!-- ここで $posts 配列をループして、投稿情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $post['Post']['title'],[
                        'action' => 'view',
                        $post['Post']['id']
                    ]
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link('Edit', [
                        'action' => 'edit',
                        $post['Post']['id']
                    ]
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',[
                        'action' => 'delete',
                        $post['Post']['id']
                    ],[
                        'confirm' => '削除してよろしいですか？'
                    ]
                );
            ?>
        </td>
        <td>
            <?php echo $post['Post']['created']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>