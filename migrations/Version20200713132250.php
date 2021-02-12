<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200713132250 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE langue (id INT AUTO_INCREMENT NOT NULL, locale VARCHAR(255) NOT NULL, originale VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE livre ADD langue_id INT DEFAULT NULL, CHANGE etat_id etat_id INT DEFAULT NULL, CHANGE categorie_id categorie_id INT DEFAULT NULL, CHANGE edition_id edition_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE livre ADD CONSTRAINT FK_AC634F992AADBACD FOREIGN KEY (langue_id) REFERENCES langue (id)');
        $this->addSql('CREATE INDEX IDX_AC634F992AADBACD ON livre (langue_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livre DROP FOREIGN KEY FK_AC634F992AADBACD');
        $this->addSql('DROP TABLE langue');
        $this->addSql('DROP INDEX IDX_AC634F992AADBACD ON livre');
        $this->addSql('ALTER TABLE livre DROP langue_id, CHANGE etat_id etat_id INT NOT NULL, CHANGE edition_id edition_id INT NOT NULL, CHANGE categorie_id categorie_id INT NOT NULL');
    }
}
