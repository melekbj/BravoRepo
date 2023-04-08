<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230408124956 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire_blog (id INT AUTO_INCREMENT NOT NULL, blog_id INT DEFAULT NULL, content VARCHAR(255) NOT NULL, INDEX IDX_29ED9511DAE07E97 (blog_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE note_blog (id INT AUTO_INCREMENT NOT NULL, blog_id INT DEFAULT NULL, note INT NOT NULL, INDEX IDX_606F401BDAE07E97 (blog_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire_blog ADD CONSTRAINT FK_29ED9511DAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id)');
        $this->addSql('ALTER TABLE note_blog ADD CONSTRAINT FK_606F401BDAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire_blog DROP FOREIGN KEY FK_29ED9511DAE07E97');
        $this->addSql('ALTER TABLE note_blog DROP FOREIGN KEY FK_606F401BDAE07E97');
        $this->addSql('DROP TABLE commentaire_blog');
        $this->addSql('DROP TABLE note_blog');
    }
}
