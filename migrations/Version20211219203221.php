<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211219203221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories_products (categories_id INT NOT NULL, products_id INT NOT NULL, INDEX IDX_6544F363A21214B7 (categories_id), INDEX IDX_6544F3636C8A81A9 (products_id), PRIMARY KEY(categories_id, products_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE categories_products ADD CONSTRAINT FK_6544F363A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE categories_products ADD CONSTRAINT FK_6544F3636C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products DROP categories');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categories_products DROP FOREIGN KEY FK_6544F363A21214B7');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE categories_products');
        $this->addSql('ALTER TABLE products ADD categories VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
