<h1>New Message</h1>
<p>ID: <?php echo $userId; ?></p>
<p>Name: <?php echo $userName; ?></p>
<?php echo $this->Form->create('Message', array(
    'url' => array('controller' => 'messages', 'action' => 'add', $userId)
)); ?>
<?php
echo $this->Form->input('content');
echo $this->Form->end('Post');
?>
<?php echo $this->Html->link('Back', array('controller' => 'messages', 'action' => 'list', $id)); ?>