<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Saletrades'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="saletrades form large-9 medium-8 columns content">
    <?= $this->Form->create($saletrade) ?>
    <fieldset>
        <legend><?= __('Add Saletrade') ?></legend>
        <?php
            echo $this->Form->input('car_id',['options' => $cars]);
            echo $this->Form->input('customer_id', ['options' => $customers]);
            echo $this->Form->input('carvalue');
            echo $this->Form->input('tax');
            echo $this->Form->input('nontax');
            echo $this->Form->input('recycle');
            echo $this->Form->input('discount');
            echo $this->Form->input('totalvalue');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
