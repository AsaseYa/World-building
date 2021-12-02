<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211202204716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE divinity ADD gender_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE divinity ADD CONSTRAINT FK_9881860B708A0E0 FOREIGN KEY (gender_id) REFERENCES gender (id)');
        $this->addSql('CREATE INDEX IDX_9881860B708A0E0 ON divinity (gender_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE divinity DROP FOREIGN KEY FK_9881860B708A0E0');
        $this->addSql('DROP INDEX IDX_9881860B708A0E0 ON divinity');
        $this->addSql('ALTER TABLE divinity DROP gender_id');
    }
}
