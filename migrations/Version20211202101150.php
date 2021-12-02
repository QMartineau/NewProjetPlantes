<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211202101150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D5809A8886');
        $this->addSql('DROP INDEX UNIQ_8ADC54D5809A8886 ON questions');
        $this->addSql('ALTER TABLE questions DROP bonne_reponse_id, CHANGE intitule question VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reponses DROP FOREIGN KEY FK_1E512EC61E27F6BF');
        $this->addSql('DROP INDEX IDX_1E512EC61E27F6BF ON reponses');
        $this->addSql('ALTER TABLE reponses ADD questions_id INT NOT NULL, ADD idQuestion INT NOT NULL, DROP question_id, CHANGE intitule reponse VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reponses ADD CONSTRAINT FK_1E512EC6BCB134CE FOREIGN KEY (questions_id) REFERENCES questions (id)');
        $this->addSql('CREATE INDEX IDX_1E512EC6BCB134CE ON reponses (questions_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE questions ADD bonne_reponse_id INT DEFAULT NULL, CHANGE question intitule VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D5809A8886 FOREIGN KEY (bonne_reponse_id) REFERENCES reponses (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8ADC54D5809A8886 ON questions (bonne_reponse_id)');
        $this->addSql('ALTER TABLE reponses DROP FOREIGN KEY FK_1E512EC6BCB134CE');
        $this->addSql('DROP INDEX IDX_1E512EC6BCB134CE ON reponses');
        $this->addSql('ALTER TABLE reponses ADD question_id INT DEFAULT NULL, DROP questions_id, DROP idQuestion, CHANGE reponse intitule VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reponses ADD CONSTRAINT FK_1E512EC61E27F6BF FOREIGN KEY (question_id) REFERENCES questions (id)');
        $this->addSql('CREATE INDEX IDX_1E512EC61E27F6BF ON reponses (question_id)');
    }
}
