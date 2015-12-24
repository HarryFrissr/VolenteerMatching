<?php
/**
 * Created by PhpStorm.
 * User: SAM
 * Date: 23-12-2015
 * Time: 16:00
 */

namespace Frissr\Volunteer\Command\Migration;

use Doctrine\DBAL\Connection;

class migrateTableMessages {

    /**
     * @var \Doctrine\DBAL\Connection
     */
    private $conn;

    public function __construct(Connection $conn ) {
        $this->conn = $conn;
    }

    public function execute() {
        $this->conn->query($this->getSQL());
    }

    public function getTitle() {
        return 'Create Match Table';
    }

    private function getSQL() {
        return '  CREATE TABLE `messages` (
                  `id` int(11) NOT NULL,
                  `sender` int(11) NOT NULL,
                  `receiver` int(11) NOT NULL,
                  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                  `content` text NOT NULL
                );
                ALTER TABLE `messages`
                  ADD PRIMARY KEY (`id`);

                ALTER TABLE `messages`
                  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
                ';
    }
}