<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Materia[]|\Cake\Collection\CollectionInterface $materias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Carreras'), ['controller' => 'Carreras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Carrera'), ['controller' => 'Carreras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Examens'), ['controller' => 'Examens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Examen'), ['controller' => 'Examens', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materias index large-9 medium-8 columns content">
    <h3><?= __('Materias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('anio_cursado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carrera_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materias as $materia): ?>
            <tr>
                <td><?= h($materia->id) ?></td>
                <td><?= h($materia->nombre) ?></td>
                <td><?= h($materia->anio_cursado) ?></td>
                <td><?= $materia->has('carrera') ? $this->Html->link($materia->carrera->id, ['controller' => 'Carreras', 'action' => 'view', $materia->carrera->id]) : '' ?></td>
                <td><?= h($materia->created) ?></td>
                <td><?= h($materia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materia->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
