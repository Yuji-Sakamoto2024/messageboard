<h1>Message List</h1>
<ul>
<?php foreach ($messages as $message): ?>
    <li>
        <?php if (!empty($message['User']['photo'])): ?>
            <p><img src="<?php echo $this->Html->url($message['User']['photo']); ?>" alt="" style="width:125px;"></p>
        <?php endif; ?>
        <strong><?php echo h($message['User']['name']); ?></strong>: <?php echo h($message['Message']['content']); ?>
        <small><?php echo $message['Message']['created']; ?></small>
    </li>
<?php endforeach; ?>
</ul>
<?php echo $this->Html->link('Add', array('controller' => 'messages', 'action' => 'add', $user['User']['id'])); ?><br><br>
<?php echo $this->Html->link('Back', array('controller' => 'users', 'action' => 'profile', $user['User']['id'])); ?><br><br>
<?php echo $this->Html->link('Logout', array('action' => 'logout')); ?>