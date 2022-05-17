<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220516193650 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reserve ADD COLUMN roomid INTEGER NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__reserve AS SELECT id, datein, dateout, typeroom, guests, email, name, total, phone, localizador FROM reserve');
        $this->addSql('DROP TABLE reserve');
        $this->addSql('CREATE TABLE reserve (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, datein DATE NOT NULL, dateout DATE NOT NULL, typeroom VARCHAR(255) NOT NULL, guests INTEGER NOT NULL, email VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, total INTEGER NOT NULL, phone VARCHAR(255) NOT NULL, localizador VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO reserve (id, datein, dateout, typeroom, guests, email, name, total, phone, localizador) SELECT id, datein, dateout, typeroom, guests, email, name, total, phone, localizador FROM __temp__reserve');
        $this->addSql('DROP TABLE __temp__reserve');
    }
}
