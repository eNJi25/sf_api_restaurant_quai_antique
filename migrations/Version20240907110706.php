<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240907110706 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant CHANGE am_opening_time am_opening_time JSON NOT NULL, CHANGE pm_opening_time pm_opening_time JSON NOT NULL, CHANGE max_guest max_guest SMALLINT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant CHANGE am_opening_time am_opening_time LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE pm_opening_time pm_opening_time LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE max_guest max_guest INT NOT NULL');
    }
}
