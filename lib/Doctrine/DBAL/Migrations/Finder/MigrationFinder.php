<?php

declare(strict_types=1);

namespace Doctrine\DBAL\Migrations\Finder;

interface MigrationFinder
{
    /** @return string[] */
    public function findMigrations(string $directory, ?string $namespace = null) : array;
}
