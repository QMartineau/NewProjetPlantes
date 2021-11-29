<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211129221803 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE questions ADD bonne_reponse_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D5809A8886 FOREIGN KEY (bonne_reponse_id) REFERENCES reponses (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8ADC54D5809A8886 ON questions (bonne_reponse_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D5809A8886');
        $this->addSql('DROP INDEX UNIQ_8ADC54D5809A8886 ON questions');
        $this->addSql('ALTER TABLE questions DROP bonne_reponse_id');
    }
}
