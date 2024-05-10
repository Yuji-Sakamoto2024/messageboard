<h1>Login</h1>
<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <?php echo $this->Form->input('email');
        echo $this->Form->input('password');
    ?>
    </fieldset>
    <br><?php echo $this->Form->end('Login'); ?>
<?= $this->Html->link("Register", ['action' => 'register']) ?>
</div>