<h1>Cars</h1>
<table>
    <tr>
        <th>Type</th>
        <th>Wheels</th>
        <th>HP</th>
        <th>Created</th>
    </tr>
    
    <?php foreach ($cars as $car): ?>
    <tr>
        <td>
            <?= $this->Html->link($car->car_type, ['action' => 'view', $car->car_type]) ?>
        </td>
        <td>
            <?= $car->wheels ?>
        </td>
        <td>
            <?= $car->hp ?>
        </td>
        <td>
            <?= $car->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<button type="submit">
  <?= $this->Html->link('Add Car', ['action' => 'add']) ?>
</button>