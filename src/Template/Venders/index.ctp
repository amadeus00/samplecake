<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vender'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="venders index large-9 medium-8 columns content">
    <h3><?= __('Venders') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adress') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bank') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($venders as $vender): ?>
            <tr>
                <td><?= $this->Number->format($vender->id) ?></td>
                <td><?= h($vender->name) ?></td>
                <td><?= h($vender->adress) ?></td>
                <td><?= h($vender->tel) ?></td>
                <td><?= h($vender->bank) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vender->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vender->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vender->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vender->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
