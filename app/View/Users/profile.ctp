<h1>User Profile</h1>
<div>
<?php 
    if (!empty($user['User']['photo'])): ?>
    <p><img src="<?php echo $this->Html->url($user['User']['photo']); ?>" alt="" style="width:125px;"></p>
    <?php endif; ?>
    <p>ID: <?php echo h($user['User']['id']); ?></p>
    <p>Name: <?php echo h($user['User']['name']); ?></p>
    <p>Birthday: <?php echo nl2br(h($user['User']['birthday'])); ?></p>
    <p>Email: <?php echo h($user['User']['email']); ?></p>
    <p>Gender: <?php echo h($user['User']['gender']); ?></p>
    <p>Hobbies: <?php echo nl2br(h($user['User']['hobbies'])); ?></p>
</div>
<?php echo $this->Html->link('Edit', array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?><br><br>
<?php echo $this->Html->link('Message List', array('controller' => 'messages', 'action' => 'list', $user['User']['id'])); ?><br><br>
<?php echo $this->Html->link('Logout', array('action' => 'logout')); ?>