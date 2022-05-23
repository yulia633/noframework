<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;

final class Migration202205172209
{
    private $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function migrate(): void
    {
        $schema = new Schema();
        $this->createSubmissionsTable($schema);
        $queries = $schema->toSql($this->connection->getDatabasePlatform());
        foreach ($queries as $query) {
            $this->connection->executeQuery($query);
        }
    }

    private function createSubmissionsTable(Schema $schema): void
    {
        $table = $schema->createTable('submissions');
        $table->addColumn('id', Types::GUID);
        $table->addColumn('title', Types::STRING);
        $table->addColumn('url', Types::STRING);
        $table->addColumn('creation_date', Types::DATE_IMMUTABLE);
        $table->addColumn('author_user_id', Types::GUID);
    }
}
