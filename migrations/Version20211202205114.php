<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211202205114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE power_divinity (power_id INT NOT NULL, divinity_id INT NOT NULL, INDEX IDX_C1F21588AB4FC384 (power_id), INDEX IDX_C1F215889D72A632 (divinity_id), PRIMARY KEY(power_id, divinity_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE power_divinity ADD CONSTRAINT FK_C1F21588AB4FC384 FOREIGN KEY (power_id) REFERENCES power (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE power_divinity ADD CONSTRAINT FK_C1F215889D72A632 FOREIGN KEY (divinity_id) REFERENCES divinity (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE power_divinity');
    }
}
