<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200710165339 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, laddress VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE etudiant ADD boursier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3EC0DC9B3 FOREIGN KEY (boursier_id) REFERENCES type_bourse (id)');
        $this->addSql('CREATE INDEX IDX_717E22E3EC0DC9B3 ON etudiant (boursier_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3838DE57B');
        $this->addSql('DROP TABLE address');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3EC0DC9B3');
        $this->addSql('DROP INDEX IDX_717E22E3EC0DC9B3 ON etudiant');
        $this->addSql('ALTER TABLE etudiant DROP boursier_id');
    }
}
