<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211126101755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, plantes_id INT DEFAULT NULL, avec_fleurs VARCHAR(255) DEFAULT NULL, avec_fruits VARCHAR(255) DEFAULT NULL, avec_feuilles VARCHAR(255) DEFAULT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_C53D045F49B7AC79 (plantes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE plantes (id INT AUTO_INCREMENT NOT NULL, genre VARCHAR(255) NOT NULL, espece VARCHAR(255) NOT NULL, cultivar VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(180) NOT NULL, roles VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_plantes (user_id INT NOT NULL, plantes_id INT NOT NULL, INDEX IDX_ABEA7F5BA76ED395 (user_id), INDEX IDX_ABEA7F5B49B7AC79 (plantes_id), PRIMARY KEY(user_id, plantes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F49B7AC79 FOREIGN KEY (plantes_id) REFERENCES plantes (id)');
        $this->addSql('ALTER TABLE user_plantes ADD CONSTRAINT FK_ABEA7F5BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_plantes ADD CONSTRAINT FK_ABEA7F5B49B7AC79 FOREIGN KEY (plantes_id) REFERENCES plantes (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F49B7AC79');
        $this->addSql('ALTER TABLE user_plantes DROP FOREIGN KEY FK_ABEA7F5B49B7AC79');
        $this->addSql('ALTER TABLE user_plantes DROP FOREIGN KEY FK_ABEA7F5BA76ED395');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE plantes');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_plantes');
    }
}
