<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cartest2'), ['action' => 'edit', $cartest2->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cartest2'), ['action' => 'delete', $cartest2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cartest2->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cartest2'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cartest2'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cartest2 view large-9 medium-8 columns content">
    <h3><?= h($cartest2->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($cartest2->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cartest2->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($cartest2->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cartest2->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cartest2->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($cartest2->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($cartest2->url)); ?>
    </div>
</div>
