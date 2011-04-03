<?php
$this->breadcrumbs=array(
	'Backlogs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Backlog', 'url'=>array('index')),
	array('label'=>'Create Backlog', 'url'=>array('create')),
	array('label'=>'View Backlog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Backlog', 'url'=>array('admin')),
);
?>

<h1>Update Backlog <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>