<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221211145300 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Build products table';
    }

    public function up(Schema $schema): void
    {
        $myTable = $schema->createTable("products");
        $myTable->addColumn("id", "integer", ["unsigned" => true, "autoincrement" => true]);
        $myTable->addColumn("name", "string", ["length" => 255]);
        $myTable->addColumn("price", "decimal", ["precision" => 10, "scale" => 2]);
        $myTable->setPrimaryKey(["id"]);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
