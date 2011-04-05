<?php
$this->breadcrumbs=array(
	'Backlogs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Backlog', 'url'=>array('index')),
	array('label'=>'Create Backlog', 'url'=>array('create')),
	array('label'=>'Update Backlog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Backlog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Create Backlog Item', 'url'=>array('item/create', 'bid'=>$model->id)),
	array('label'=>'Manage Backlog', 'url'=>array('admin')),
);
?>

<h1>View Backlog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'description',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
