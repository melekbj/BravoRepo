<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230408125835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note_blog ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE note_blog ADD CONSTRAINT FK_606F401BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_606F401BA76ED395 ON note_blog (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE note_blog DROP FOREIGN KEY FK_606F401BA76ED395');
        $this->addSql('DROP INDEX IDX_606F401BA76ED395 ON note_blog');
        $this->addSql('ALTER TABLE note_blog DROP user_id');
    }
}
