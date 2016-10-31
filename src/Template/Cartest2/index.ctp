<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cartest2'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cartest2 index large-9 medium-8 columns content">
    <h3><?= __('Cartest2') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cartest2 as $cartest2): ?>
            <tr>
                <td><?= $this->Number->format($cartest2->id) ?></td>
                <td><?= $this->Number->format($cartest2->user_id) ?></td>
                <td><?= h($cartest2->title) ?></td>
                <td><?= h($cartest2->created) ?></td>
                <td><?= h($cartest2->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cartest2->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cartest2->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cartest2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cartest2->id)]) ?>
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
