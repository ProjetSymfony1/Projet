<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220315113105 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cart (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, INDEX IDX_BA388B779F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cart_dish (cart_id INT NOT NULL, dish_id INT NOT NULL, INDEX IDX_7A988C811AD5CDBF (cart_id), INDEX IDX_7A988C81148EB0CB (dish_id), PRIMARY KEY(cart_id, dish_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dish (id INT AUTO_INCREMENT NOT NULL, dish_name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, price DOUBLE PRECISION NOT NULL, type VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE favorite (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_dish_id INT NOT NULL, INDEX IDX_68C58ED979F37AE5 (id_user_id), INDEX IDX_68C58ED9CA1319BB (id_dish_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, id_user_id INT DEFAULT NULL, message VARCHAR(2048) NOT NULL, INDEX IDX_B6BD307F79F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `order` (id INT AUTO_INCREMENT NOT NULL, id_cart_id INT NOT NULL, date DATE NOT NULL, UNIQUE INDEX UNIQ_F5299398C44864CF (id_cart_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_timeslot_id INT NOT NULL, INDEX IDX_42C8495579F37AE5 (id_user_id), INDEX IDX_42C84955E132741E (id_timeslot_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE time_slot (id INT AUTO_INCREMENT NOT NULL, date DATE NOT NULL, hour TIME NOT NULL, available TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, id_user VARCHAR(255) NOT NULL, pwd_user VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, gender VARCHAR(255) NOT NULL, level JSON NOT NULL, UNIQUE INDEX UNIQ_8D93D6496B3CA4B (id_user), UNIQUE INDEX UNIQ_8D93D649654CBC5F (pwd_user), UNIQUE INDEX UNIQ_8D93D6495126AC48 (mail), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE cart_dish ADD CONSTRAINT FK_7A988C811AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cart_dish ADD CONSTRAINT FK_7A988C81148EB0CB FOREIGN KEY (dish_id) REFERENCES dish (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED979F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE favorite ADD CONSTRAINT FK_68C58ED9CA1319BB FOREIGN KEY (id_dish_id) REFERENCES dish (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F79F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F5299398C44864CF FOREIGN KEY (id_cart_id) REFERENCES cart (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495579F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955E132741E FOREIGN KEY (id_timeslot_id) REFERENCES time_slot (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart_dish DROP FOREIGN KEY FK_7A988C811AD5CDBF');
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F5299398C44864CF');
        $this->addSql('ALTER TABLE cart_dish DROP FOREIGN KEY FK_7A988C81148EB0CB');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED9CA1319BB');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955E132741E');
        $this->addSql('ALTER TABLE cart DROP FOREIGN KEY FK_BA388B779F37AE5');
        $this->addSql('ALTER TABLE favorite DROP FOREIGN KEY FK_68C58ED979F37AE5');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F79F37AE5');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495579F37AE5');
        $this->addSql('DROP TABLE cart');
        $this->addSql('DROP TABLE cart_dish');
        $this->addSql('DROP TABLE dish');
        $this->addSql('DROP TABLE favorite');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE `order`');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE time_slot');
        $this->addSql('DROP TABLE user');
    }
}
