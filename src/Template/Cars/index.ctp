<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Car'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buytrades'), ['controller' => 'Buytrades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Buytrade'), ['controller' => 'Buytrades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cars index large-9 medium-8 columns content">
    <h3><?= __('Cars') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('manufacturer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('storagedate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('retrievaldate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cars as $car): ?>
            <tr>
                <td><?= $this->Number->format($car->id) ?></td>
                <td><?= h($car->carname) ?></td>
                <td><?= h($car->manufacturer) ?></td>
                <td><?= h($car->storagedate) ?></td>
                <td><?= h($car->retrievaldate) ?></td>
                <td><?= $this->Number->format($car->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $car->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $car->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $car->id], ['confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?>
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
