<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
		    'db'=>array(
			    'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/backlogz_test.db',
                'tablePrefix' => 'bz_',
		    ),
		),
	)
);
