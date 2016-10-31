<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vender->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vender->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Venders'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="venders form large-9 medium-8 columns content">
    <?= $this->Form->create($vender) ?>
    <fieldset>
        <legend><?= __('Edit Vender') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('adress');
            echo $this->Form->input('tel');
            echo $this->Form->input('bank');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
