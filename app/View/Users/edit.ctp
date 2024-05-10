<h1>User Profile Edit</h1>
<?php echo $this->Form->create('User', array(
    'type' => 'file',
    'url' => array('controller' => 'users', 'action' => 'edit', $id)
)); ?>
<div>
    <p><?php echo $this->Form->input('id', array('readonly' => true,'type' => 'id')); ?></p>
    <p><?php echo $this->Form->input('photo', array('type' => 'file'));
    echo $this->Html->image($this->request->data['User']['photo'], array('width' => '100px')); ?>
    <p><?php echo $this->Form->input('name'); ?></p>
    <p><?php echo $this->Form->input('birthday'); ?></p>
    <p><?php echo $this->Form->input('email'); ?></p>
    <p><?php echo $this->Form->input('password'); ?></p>
    <p><?php echo $this->Form->input('gender', array(
            'type' => 'select',
            'options' => array('male' => 'Male', 'female' => 'Female', 'other' => 'Other')
        )); ?></p>
    <p><?php echo $this->Form->input('hobbies', array('type' => 'textarea')); ?></p>
    <?php echo $this->Form->end('Update'); ?><br>
    <?php echo $this->Html->link('Back', array('controller' => 'users', 'action' => 'profile', $id)); ?>
</div>