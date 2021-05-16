<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210515104039 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE integrator_product (id INT AUTO_INCREMENT NOT NULL, product_code VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, ean VARCHAR(255) NOT NULL, producer VARCHAR(255) DEFAULT NULL, cat VARCHAR(255) DEFAULT NULL, price_base VARCHAR(255) DEFAULT NULL, tax VARCHAR(255) DEFAULT NULL, price VARCHAR(255) DEFAULT NULL, price_min VARCHAR(255) DEFAULT NULL, promo VARCHAR(255) DEFAULT NULL, stock VARCHAR(255) DEFAULT NULL, availability VARCHAR(255) DEFAULT NULL, weight VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE integrator_product');
    }
}
