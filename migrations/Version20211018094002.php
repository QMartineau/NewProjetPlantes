<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211018094002 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, avec_feilles VARCHAR(255) DEFAULT NULL, avec_fleurs VARCHAR(255) DEFAULT NULL, avec_fruits VARCHAR(255) DEFAULT NULL, cultivar VARCHAR(255) DEFAULT NULL, avec_feuilles VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE plantes ADD id_image_id INT NOT NULL');
        $this->addSql('ALTER TABLE plantes ADD CONSTRAINT FK_F3E761516D7EC9F8 FOREIGN KEY (id_image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_F3E761516D7EC9F8 ON plantes (id_image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE plantes DROP FOREIGN KEY FK_F3E761516D7EC9F8');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP INDEX IDX_F3E761516D7EC9F8 ON plantes');
        $this->addSql('ALTER TABLE plantes DROP id_image_id');
    }
}
