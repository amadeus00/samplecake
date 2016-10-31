<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cartest'), ['action' => 'edit', $cartest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cartest'), ['action' => 'delete', $cartest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cartest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cartest'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cartest'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cartest view large-9 medium-8 columns content">
    <h3><?= h($cartest->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cartest->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($cartest->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cartest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($cartest->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($cartest->modified) ?></td>
        </tr>
    </table>
</div>
