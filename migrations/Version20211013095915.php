<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211013095915 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE plantes (id INT AUTO_INCREMENT NOT NULL, genre VARCHAR(255) NOT NULL, espece VARCHAR(255) NOT NULL, cultivar VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, verified TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qcm (id INT AUTO_INCREMENT NOT NULL, question VARCHAR(255) NOT NULL, resultat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE qcm_plantes (qcm_id INT NOT NULL, plantes_id INT NOT NULL, INDEX IDX_215ABA1AFF6241A6 (qcm_id), INDEX IDX_215ABA1A49B7AC79 (plantes_id), PRIMARY KEY(qcm_id, plantes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, roles TINYTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_qcm (user_id INT NOT NULL, qcm_id INT NOT NULL, INDEX IDX_3CB79F7FA76ED395 (user_id), INDEX IDX_3CB79F7FFF6241A6 (qcm_id), PRIMARY KEY(user_id, qcm_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_plantes (user_id INT NOT NULL, plantes_id INT NOT NULL, INDEX IDX_ABEA7F5BA76ED395 (user_id), INDEX IDX_ABEA7F5B49B7AC79 (plantes_id), PRIMARY KEY(user_id, plantes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE qcm_plantes ADD CONSTRAINT FK_215ABA1AFF6241A6 FOREIGN KEY (qcm_id) REFERENCES qcm (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE qcm_plantes ADD CONSTRAINT FK_215ABA1A49B7AC79 FOREIGN KEY (plantes_id) REFERENCES plantes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_qcm ADD CONSTRAINT FK_3CB79F7FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_qcm ADD CONSTRAINT FK_3CB79F7FFF6241A6 FOREIGN KEY (qcm_id) REFERENCES qcm (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_plantes ADD CONSTRAINT FK_ABEA7F5BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_plantes ADD CONSTRAINT FK_ABEA7F5B49B7AC79 FOREIGN KEY (plantes_id) REFERENCES plantes (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE qcm_plantes DROP FOREIGN KEY FK_215ABA1A49B7AC79');
        $this->addSql('ALTER TABLE user_plantes DROP FOREIGN KEY FK_ABEA7F5B49B7AC79');
        $this->addSql('ALTER TABLE qcm_plantes DROP FOREIGN KEY FK_215ABA1AFF6241A6');
        $this->addSql('ALTER TABLE user_qcm DROP FOREIGN KEY FK_3CB79F7FFF6241A6');
        $this->addSql('ALTER TABLE user_qcm DROP FOREIGN KEY FK_3CB79F7FA76ED395');
        $this->addSql('ALTER TABLE user_plantes DROP FOREIGN KEY FK_ABEA7F5BA76ED395');
        $this->addSql('DROP TABLE plantes');
        $this->addSql('DROP TABLE qcm');
        $this->addSql('DROP TABLE qcm_plantes');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_qcm');
        $this->addSql('DROP TABLE user_plantes');
    }
}
