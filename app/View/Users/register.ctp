
<h1>Registration</h1>
<div class="users form">
    <?php echo $this->Form->create('User'); ?>
        <fieldset>
            <legend><?php echo ('Add User'); ?></legend>
            <?php
                echo $this->Form->input('email');
                echo $this->Form->input('password');
            ?>
        </fieldset>
        <br>
        <?php echo $this->Form->end(('Registration')); ?>
    <?= $this->Html->link("Back", ['action' => '../']) ?>
</div>