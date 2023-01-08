<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221228154350 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE operation_bancaire (id INT AUTO_INCREMENT NOT NULL, users_id INT NOT NULL, date DATETIME NOT NULL, libellé VARCHAR(255) NOT NULL, position_gps VARCHAR(255) NOT NULL, lieu VARCHAR(255) DEFAULT NULL, INDEX IDX_377ACDAE67B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE operation_bancaire ADD CONSTRAINT FK_377ACDAE67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE operation_bancaire DROP FOREIGN KEY FK_377ACDAE67B3B43D');
        $this->addSql('DROP TABLE operation_bancaire');
    }
}
