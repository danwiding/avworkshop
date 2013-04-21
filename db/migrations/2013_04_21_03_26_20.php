<?php

class Migration_2013_04_21_03_26_20 extends MpmMigration
{

	public function up(PDO &$pdo)
	{
        $pdo->exec("
        ALTER TABLE `lends_user` ENGINE = InnoDB
, ADD UNIQUE INDEX `unique_jumioscanreference` (`jumioidscanreference` ASC) ;
        ");
	}

	public function down(PDO &$pdo)
	{
		
	}

}

?>