<?php

namespace Frissr\Volunteer\Command\Fixture;

class loadEventFixture extends BaseFixture
{
    public function getTitle()
    {
        return 'Load Events';
    }

    public function execute()
    {
        // TODO Controleer of de gebruikers reeds bestaan
        $queries[] = "INSERT INTO `Event` (`title`, `description`, `date`, `time`, `MaxNumberOfParticipants`, `NumberOfParticipants`, `organiser`, `location`) VALUES ('Christmas Helping', 'blablablalbla', '2015-12-26', '11:40',234,40, 'Frissr', 'Amsterdam');";

        foreach ($queries as $query) {
            echo "Execute: $query <br>";
            $this->conn->query($query);
        }
    }
}
