<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230130082207 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE plateforme (id INT AUTO_INCREMENT NOT NULL, universe_id INT NOT NULL, name VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, background VARCHAR(255) NOT NULL, INDEX IDX_3C020C115CD9AF2 (universe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE plateforme ADD CONSTRAINT FK_3C020C115CD9AF2 FOREIGN KEY (universe_id) REFERENCES universe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plateforme DROP FOREIGN KEY FK_3C020C115CD9AF2');
        $this->addSql('DROP TABLE plateforme');
    }
}
