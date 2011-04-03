<?php
/**
 * Created by JetBrains PhpStorm.
 * User: klee
 * Date: 03/04/11
 * Time: 17:09
 * To change this template use File | Settings | File Templates.
 */
 
class DbTest extends CTestCase {
    public function testConnection()
    {
        $this->assertNotEquals(NULL, Yii::app()->db);
    }
}
