<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211130090020 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE task (id INT AUTO_INCREMENT NOT NULL, t_odolist_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_527EDB253FB5A1B1 (t_odolist_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todolist (id INT AUTO_INCREMENT NOT NULL, ower_id INT NOT NULL, users_id INT DEFAULT NULL, UNIQUE INDEX UNIQ_DD4DF6DBFF515203 (ower_id), INDEX IDX_DD4DF6DB67B3B43D (users_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE task ADD CONSTRAINT FK_527EDB253FB5A1B1 FOREIGN KEY (t_odolist_id) REFERENCES todolist (id)');
        $this->addSql('ALTER TABLE todolist ADD CONSTRAINT FK_DD4DF6DBFF515203 FOREIGN KEY (ower_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE todolist ADD CONSTRAINT FK_DD4DF6DB67B3B43D FOREIGN KEY (users_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE task DROP FOREIGN KEY FK_527EDB253FB5A1B1');
        $this->addSql('ALTER TABLE todolist DROP FOREIGN KEY FK_DD4DF6DBFF515203');
        $this->addSql('ALTER TABLE todolist DROP FOREIGN KEY FK_DD4DF6DB67B3B43D');
        $this->addSql('DROP TABLE task');
        $this->addSql('DROP TABLE todolist');
        $this->addSql('DROP TABLE `user`');
    }
}
