<?php
	echo $this->Html->css('../app/webroot/css/pages/posts/index',
		['inline' => false]
	);
	$this->assign('title', '投稿一覧');
?>

<div class="posts-list-container">
    <div class="p-head-area">
        <h1>投稿一覧</h1>
        <p><?php echo $this->Html->link('投稿を追加する',['action' => 'add'], ['class' => 'btn btn-primary']); ?>
        </p>
    </div>
    <?php if(!empty($posts)):?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>タイトル</th>
                    <th>編集</th>
                    <th>削除</th>
                    <th>作成日時</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                <tr>
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
                            echo $this->Html->link('編集', [
                                    'action' => 'edit',
                                    $post['Post']['id']
                                ]
                            );
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $this->Form->postLink(
                                '削除',[
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
            </tbody>
        </table>
    <?php else:?>
        <p class="nothing-data">投稿された記事がありません。</p>
    <?php endif;?>
</div>