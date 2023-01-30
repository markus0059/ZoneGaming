<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230130162020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE console (id INT AUTO_INCREMENT NOT NULL, plateforme_id INT NOT NULL, universe_id INT NOT NULL, model VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price_all_min INT NOT NULL, price_all_max INT NOT NULL, price_with_controller_min INT NOT NULL, price_with_controller_max INT NOT NULL, price_with_cables_min INT NOT NULL, price_with_cables_max INT NOT NULL, INDEX IDX_3603CFB6391E226B (plateforme_id), INDEX IDX_3603CFB65CD9AF2 (universe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE console ADD CONSTRAINT FK_3603CFB6391E226B FOREIGN KEY (plateforme_id) REFERENCES plateforme (id)');
        $this->addSql('ALTER TABLE console ADD CONSTRAINT FK_3603CFB65CD9AF2 FOREIGN KEY (universe_id) REFERENCES universe (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE console DROP FOREIGN KEY FK_3603CFB6391E226B');
        $this->addSql('ALTER TABLE console DROP FOREIGN KEY FK_3603CFB65CD9AF2');
        $this->addSql('DROP TABLE console');
    }
}
