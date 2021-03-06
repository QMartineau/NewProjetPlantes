<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211019125622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image ADD plantes_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F6AD6436C FOREIGN KEY (plantes_id_id) REFERENCES plantes (id)');
        $this->addSql('CREATE INDEX IDX_C53D045F6AD6436C ON image (plantes_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F6AD6436C');
        $this->addSql('DROP INDEX IDX_C53D045F6AD6436C ON image');
        $this->addSql('ALTER TABLE image DROP plantes_id_id');
    }
}
