<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211128193449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE questions (id INT AUTO_INCREMENT NOT NULL, reponse1_id INT DEFAULT NULL, reponse2_id INT DEFAULT NULL, reponse3_id INT DEFAULT NULL, reponse4_id INT DEFAULT NULL, reponse_bon_id INT DEFAULT NULL, intitule VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8ADC54D5D515D724 (reponse1_id), UNIQUE INDEX UNIQ_8ADC54D5C7A078CA (reponse2_id), UNIQUE INDEX UNIQ_8ADC54D57F1C1FAF (reponse3_id), UNIQUE INDEX UNIQ_8ADC54D5E2CB2716 (reponse4_id), UNIQUE INDEX UNIQ_8ADC54D57931AAE5 (reponse_bon_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponses (id INT AUTO_INCREMENT NOT NULL, id_question_id INT NOT NULL, intitule VARCHAR(255) DEFAULT NULL, image VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1E512EC66353B48 (id_question_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D5D515D724 FOREIGN KEY (reponse1_id) REFERENCES reponses (id)');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D5C7A078CA FOREIGN KEY (reponse2_id) REFERENCES reponses (id)');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D57F1C1FAF FOREIGN KEY (reponse3_id) REFERENCES reponses (id)');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D5E2CB2716 FOREIGN KEY (reponse4_id) REFERENCES reponses (id)');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D57931AAE5 FOREIGN KEY (reponse_bon_id) REFERENCES reponses (id)');
        $this->addSql('ALTER TABLE reponses ADD CONSTRAINT FK_1E512EC66353B48 FOREIGN KEY (id_question_id) REFERENCES questions (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponses DROP FOREIGN KEY FK_1E512EC66353B48');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D5D515D724');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D5C7A078CA');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D57F1C1FAF');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D5E2CB2716');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D57931AAE5');
        $this->addSql('DROP TABLE questions');
        $this->addSql('DROP TABLE reponses');
    }
}
