<?php

use Phpmig\Migration\Migration;

class CreateInvestments extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {

        $sql = 'CREATE TABLE investments (
                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                  investment_type_id INT(11), 
                  short_name VARCHAR(50),
                  long_name VARCHAR(255),
                  day_value DECIMAL(13,4),
                  month_value DECIMAL(13,4),
                  year_value DECIMAL(13,4),
                  year3_value DECIMAL(13,4),
                  year5_value DECIMAL(13,4),
                  last_value DECIMAL(13,4),
                  last_update DATETIME
                );';

        $container = $this->getContainer();
        $container['db']->query($sql);

    }

    /**
     * Undo the migration
     */
    public function down()
    {

        $sql = 'DROP TABLE `investments`';
        $container = $this->getContainer();
        $container['db']->query($sql);

    }
}
