<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Migrations\Tests\Stub\Functional;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

class MigrateWithDataModification extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO test_data_migration (test) VALUES (1)');
        $this->addSql('INSERT INTO test_data_migration (test) VALUES (2)');
        $this->addSql('INSERT INTO test_data_migration (test) VALUES (3)');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM test_data_migration');
    }

    public function isTransactional() : bool
    {
        return true;
    }
}
