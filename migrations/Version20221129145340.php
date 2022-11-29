<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221129145340 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE evenement (idEvent INT AUTO_INCREMENT NOT NULL, NomEvent VARCHAR(20) DEFAULT NULL, AdresseEvent VARCHAR(20) DEFAULT NULL, CapaciteEvent INT DEFAULT NULL, nbrTicketAchete INT DEFAULT NULL, DateDebutEvent DATETIME DEFAULT NULL, DateFinEvent DATETIME DEFAULT NULL, TypeEvent VARCHAR(20) DEFAULT NULL, CategorieEvent VARCHAR(20) DEFAULT NULL, PrixEntre DOUBLE PRECISION DEFAULT NULL, image1 VARCHAR(500) DEFAULT NULL, PRIMARY KEY(idEvent)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_calendar (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, start DATETIME NOT NULL, end DATETIME NOT NULL, description LONGTEXT NOT NULL, background_color VARCHAR(10) NOT NULL, border_color VARCHAR(10) NOT NULL, text_color VARCHAR(10) NOT NULL, journee_entiere TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (IdTicket INT AUTO_INCREMENT NOT NULL, prix_ticket DOUBLE PRECISION DEFAULT NULL, nom_event VARCHAR(20) DEFAULT NULL, type_ticket VARCHAR(10) DEFAULT NULL, PRIMARY KEY(IdTicket)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE event_calendar');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
