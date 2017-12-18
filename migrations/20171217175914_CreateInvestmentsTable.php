<?php

use Phpmig\Migration\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {

        $sql = 'CREATE TABLE investments (
                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                  shortname VARCHAR(20),
                  longname VARCHAR(255),
                  usd_value DECIMAL(13,4),
                  last_sync DATETIME,
                  sync_interval INT(11) UNSIGNED,
                  value_endpoint VARCHAR(2083),
                  membership_level INT(11)
                );';

        $container = $this->getContainer();
        $container['db']->query($sql);

    }

    /**
     * Undo the migration
     */
    public function down()
    {

        $sql = 'DROP TABLE investments';
        $container = $this->getContainer();
        $container['db']->query($sql);

    }
}
