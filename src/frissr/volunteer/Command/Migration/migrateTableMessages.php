<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 23-12-2015
 * Time: 16:00
 */

namespace Frissr\Volunteer\Command\Migration;

use Doctrine\DBAL\Connection;

class migrateTableMessages extends BaseMigrationTable {

    public function getTitle() {
        return 'Create Match Table';
    }


    protected function getSQL() {
        return '  CREATE TABLE `messages` (
                  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
                  `sender` int(11) NOT NULL,
                  `receiver` int(11) NOT NULL,
                  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                  `content` text NOT NULL
              );';
    }
}