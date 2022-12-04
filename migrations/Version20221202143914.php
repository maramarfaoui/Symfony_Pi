<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221202143914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commandpm (idCPM INT AUTO_INCREMENT NOT NULL, IDProd INT NOT NULL, NomProd VARCHAR(255) NOT NULL, referenceCM INT NOT NULL, date VARCHAR(255) NOT NULL, quantiteCpm INT NOT NULL, iduser INT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(idCPM)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produitpm (IDProd INT AUTO_INCREMENT NOT NULL, NomProd VARCHAR(255) NOT NULL, referenceP INT NOT NULL, quantiteP INT NOT NULL, typep VARCHAR(255) DEFAULT NULL, prixPM INT NOT NULL, dateAjoutPM VARCHAR(255) NOT NULL, PRIMARY KEY(IDProd)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `like` DROP FOREIGN KEY FK_AC6340B329A5EC27');
        $this->addSql('DROP TABLE `like`');
        $this->addSql('DROP TABLE produit');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `like` (id INT AUTO_INCREMENT NOT NULL, produit INT DEFAULT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_AC6340B329A5EC27 (produit), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE produit (IdPROD INT AUTO_INCREMENT NOT NULL, NomProd VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PrixProd DOUBLE PRECISION NOT NULL, LocalisationProd VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, TypeProd VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, TypeStatue VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, imagem1 VARCHAR(500) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(IdPROD)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE `like` ADD CONSTRAINT FK_AC6340B329A5EC27 FOREIGN KEY (produit) REFERENCES produit (idprod) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE commandpm');
        $this->addSql('DROP TABLE produitpm');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
