<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220329221928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED979F37AE5');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED9CA1319BB');
        $this->addSql('DROP INDEX IDX_68C58ED979F37AE5 ON favorite');
        $this->addSql('DROP INDEX IDX_68C58ED9CA1319BB ON favorite');
        $this->addSql('ALTER TABLE favorite ADD id_user INT NOT NULL, ADD id_dish INT NOT NULL, DROP id_user_id, DROP id_dish_id');
        $this->addSql('ALTER TABLE message ADD object VARCHAR(255) NOT NULL, ADD status VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD date_reservation DATE NOT NULL, ADD time_reservation TIME NOT NULL, ADD available TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE favorite ADD id_user_id INT NOT NULL, ADD id_dish_id INT NOT NULL, DROP id_user, DROP id_dish');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED979F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED9CA1319BB FOREIGN KEY (id_dish_id) REFERENCES dish (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_68C58ED979F37AE5 ON favorite (id_user_id)');
        $this->addSql('CREATE INDEX IDX_68C58ED9CA1319BB ON favorite (id_dish_id)');
        $this->addSql('ALTER TABLE message DROP object, DROP status');
        $this->addSql('ALTER TABLE reservation DROP date_reservation, DROP time_reservation, DROP available');
    }
}
