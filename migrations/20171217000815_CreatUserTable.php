<?php

use Phpmig\Migration\Migration;

class CreatUserTable extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {

        $sql = 'CREATE TABLE users (
                  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                  username VARCHAR(255) UNIQUE NOT NULL, 
                  first_name VARCHAR(255), 
                  last_name VARCHAR(255), 
                  password VARCHAR(64), 
                  admin TINYINT(1) DEFAULT 0
                );';

        $container = $this->getContainer();
        $container['db']->query($sql);

    }

    /**
     * Undo the migration
     */
    public function down()
    {

        $sql = 'DROP TABLE `users`';
        $container = $this->getContainer();
        $container['db']->query($sql);

    }
}
