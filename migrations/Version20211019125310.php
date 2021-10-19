<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211019125310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plantes DROP FOREIGN KEY FK_F3E761516D7EC9F8');
        $this->addSql('DROP INDEX IDX_F3E761516D7EC9F8 ON plantes');
        $this->addSql('ALTER TABLE plantes DROP id_image_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plantes ADD id_image_id INT NOT NULL');
        $this->addSql('ALTER TABLE plantes ADD CONSTRAINT FK_F3E761516D7EC9F8 FOREIGN KEY (id_image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_F3E761516D7EC9F8 ON plantes (id_image_id)');
    }
}
