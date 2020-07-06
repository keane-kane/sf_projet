<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200705000543 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, laddress VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE batiment (id INT AUTO_INCREMENT NOT NULL, nbatiment INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bourse (id INT AUTO_INCREMENT NOT NULL, type_bourse_id INT NOT NULL, INDEX IDX_DDC2BC1CFAA19CC1 (type_bourse_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chambre (id INT AUTO_INCREMENT NOT NULL, type_chambre_id INT NOT NULL, batiment_id INT NOT NULL, nchambre INT NOT NULL, INDEX IDX_C509E4FF8614A971 (type_chambre_id), INDEX IDX_C509E4FFD6F6891B (batiment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant (id INT AUTO_INCREMENT NOT NULL, etre_id INT NOT NULL, matricule VARCHAR(255) NOT NULL, prenom VARCHAR(50) NOT NULL, nom VARCHAR(50) NOT NULL, email VARCHAR(50) NOT NULL, tel INT NOT NULL, date_naiss DATE NOT NULL, INDEX IDX_717E22E3C2BB5B57 (etre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant_complet (id INT AUTO_INCREMENT NOT NULL, habite_id INT DEFAULT NULL, avoir_bourse_id INT DEFAULT NULL, loger_id INT DEFAULT NULL, status_id INT NOT NULL, INDEX IDX_E8D71EEB78BC975 (habite_id), UNIQUE INDEX UNIQ_E8D71EEE4FCC365 (avoir_bourse_id), INDEX IDX_E8D71EE838DE57B (loger_id), INDEX IDX_E8D71EE6BF700BD (status_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_bourse (id INT AUTO_INCREMENT NOT NULL, montant INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_chambre (id INT AUTO_INCREMENT NOT NULL, genre VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_etudiant (id INT AUTO_INCREMENT NOT NULL, options VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bourse ADD CONSTRAINT FK_DDC2BC1CFAA19CC1 FOREIGN KEY (type_bourse_id) REFERENCES type_bourse (id)');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FF8614A971 FOREIGN KEY (type_chambre_id) REFERENCES type_chambre (id)');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FFD6F6891B FOREIGN KEY (batiment_id) REFERENCES batiment (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3C2BB5B57 FOREIGN KEY (etre_id) REFERENCES type_etudiant (id)');
        $this->addSql('ALTER TABLE etudiant_complet ADD CONSTRAINT FK_E8D71EEB78BC975 FOREIGN KEY (habite_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE etudiant_complet ADD CONSTRAINT FK_E8D71EEE4FCC365 FOREIGN KEY (avoir_bourse_id) REFERENCES bourse (id)');
        $this->addSql('ALTER TABLE etudiant_complet ADD CONSTRAINT FK_E8D71EE838DE57B FOREIGN KEY (loger_id) REFERENCES chambre (id)');
        $this->addSql('ALTER TABLE etudiant_complet ADD CONSTRAINT FK_E8D71EE6BF700BD FOREIGN KEY (status_id) REFERENCES type_etudiant (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant_complet DROP FOREIGN KEY FK_E8D71EEB78BC975');
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FFD6F6891B');
        $this->addSql('ALTER TABLE etudiant_complet DROP FOREIGN KEY FK_E8D71EEE4FCC365');
        $this->addSql('ALTER TABLE etudiant_complet DROP FOREIGN KEY FK_E8D71EE838DE57B');
        $this->addSql('ALTER TABLE bourse DROP FOREIGN KEY FK_DDC2BC1CFAA19CC1');
        $this->addSql('ALTER TABLE chambre DROP FOREIGN KEY FK_C509E4FF8614A971');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3C2BB5B57');
        $this->addSql('ALTER TABLE etudiant_complet DROP FOREIGN KEY FK_E8D71EE6BF700BD');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE batiment');
        $this->addSql('DROP TABLE bourse');
        $this->addSql('DROP TABLE chambre');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP TABLE etudiant_complet');
        $this->addSql('DROP TABLE type_bourse');
        $this->addSql('DROP TABLE type_chambre');
        $this->addSql('DROP TABLE type_etudiant');
    }
}
