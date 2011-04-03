<?php
$this->breadcrumbs=array(
	'Backlogs',
);

$this->menu=array(
	array('label'=>'Create Backlog', 'url'=>array('create')),
	array('label'=>'Manage Backlog', 'url'=>array('admin')),
);
?>

<h1>Backlogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
