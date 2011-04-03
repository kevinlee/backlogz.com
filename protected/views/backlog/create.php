<?php
$this->breadcrumbs=array(
	'Backlogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Backlog', 'url'=>array('index')),
	array('label'=>'Manage Backlog', 'url'=>array('admin')),
);
?>

<h1>Create Backlog</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>