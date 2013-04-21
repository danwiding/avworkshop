<?php

class Migration_2013_04_20_21_45_11 extends MpmMigration
{

	public function up(PDO &$pdo)
	{
		$pdo->exec("
		    CREATE TABLE `lends_user` (
	`lends_userid` int(11) NOT NULL auto_increment,
	`wp_user` bigint(20) NOT NULL,
	`idclientip` VARCHAR(255) NOT NULL,
	`idcountry` VARCHAR(255) NOT NULL,
	`idscanstatus` VARCHAR(255) NOT NULL,
	`idtype` VARCHAR(255) NOT NULL,
	`jumioidscanreference` VARCHAR(255) NOT NULL,
	`merchantidscanreference` VARCHAR(255) NOT NULL,
	`verificationstatus` VARCHAR(255) NOT NULL,
	`customerid` VARCHAR(255) NOT NULL,
	`idfirstname` VARCHAR(255) NOT NULL,
	`idlastname` VARCHAR(255) NOT NULL,
	`iddob` VARCHAR(255) NOT NULL,
	`idexpiry` VARCHAR(255) NOT NULL,
	`idnumber` VARCHAR(255) NOT NULL,
	`idscanimage` VARCHAR(255) NOT NULL,
	`idscanimagebackside` VARCHAR(255) NOT NULL,
	`stripe_token` VARCHAR(255) NOT NULL, PRIMARY KEY (`lends_userid`)) ENGINE=MyISAM
		");

        $pdo->exec("
        ALTER TABLE `lends_user`
ADD UNIQUE INDEX `unique_merchantidscanreference` (`merchantidscanreference` ASC),
ADD UNIQUE INDEX `unique_wp_users` (`wp_user` ASC);
		");
	}

	public function down(PDO &$pdo)
	{
		
	}

}

?>