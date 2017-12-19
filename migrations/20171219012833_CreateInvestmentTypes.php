<?php

use Phpmig\Migration\Migration;

class CreateInvestmentTypes extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {

        $sql = 'CREATE TABLE investment_types (
                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                  name VARCHAR(255)
                );';

        $container = $this->getContainer();
        $container['db']->query($sql);

    }

    /**
     * Undo the migration
     */
    public function down()
    {

        $sql = 'DROP TABLE `investment_types`';
        $container = $this->getContainer();
        $container['db']->query($sql);

    }
}
