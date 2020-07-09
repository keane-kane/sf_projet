<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200709102513 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chambre CHANGE nchambre nchambre VARCHAR(50) NOT NULL');
        $this->addSql('DROP INDEX matricule ON etudiant');
        $this->addSql('ALTER TABLE etudiant ADD etudiant_complet_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E360108FBE FOREIGN KEY (etudiant_complet_id) REFERENCES etudiant_complet (id)');
        $this->addSql('CREATE INDEX IDX_717E22E360108FBE ON etudiant (etudiant_complet_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE chambre CHANGE nchambre nchambre VARCHAR(25) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E360108FBE');
        $this->addSql('DROP INDEX IDX_717E22E360108FBE ON etudiant');
        $this->addSql('ALTER TABLE etudiant DROP etudiant_complet_id');
        $this->addSql('CREATE UNIQUE INDEX matricule ON etudiant (matricule)');
    }
}
