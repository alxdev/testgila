<h1>Add Car</h1>
<?php
    echo $this->Form->create($car);
    echo $this->Form->control('car_type');
    echo $this->Form->control('wheels');
    echo $this->Form->control('hp');
    echo $this->Form->button(__('Save Car'));
    echo $this->Form->end();
?>