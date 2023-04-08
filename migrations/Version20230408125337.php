<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230408125337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B73CD614DD8CA775 ON categorie_blog (nom_categorie)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3BAE0AA72B36786B ON event (title)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CFE8E8096C6E55B5 ON event_categorie (nom)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8579B3958CDE5729 ON type_reclamation (type)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_B73CD614DD8CA775 ON categorie_blog');
        $this->addSql('DROP INDEX UNIQ_3BAE0AA72B36786B ON event');
        $this->addSql('DROP INDEX UNIQ_CFE8E8096C6E55B5 ON event_categorie');
        $this->addSql('DROP INDEX UNIQ_8579B3958CDE5729 ON type_reclamation');
    }
}
