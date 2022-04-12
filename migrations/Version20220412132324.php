<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220412132324 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, last_name VARCHAR(100) NOT NULL, first_name VARCHAR(100) NOT NULL, street_number VARCHAR(25) NOT NULL, street_name VARCHAR(150) NOT NULL, street_addition VARCHAR(150) NOT NULL, postal_code VARCHAR(10) NOT NULL, city VARCHAR(100) NOT NULL, main SMALLINT NOT NULL, INDEX IDX_D4E6F81A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brand (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, active SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ips (id INT AUTO_INCREMENT NOT NULL, address VARCHAR(100) NOT NULL, rela VARCHAR(255) NOT NULL, black_list SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ips_user (ips_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_DDCC9AF287610CAE (ips_id), INDEX IDX_DDCC9AF2A76ED395 (user_id), PRIMARY KEY(ips_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_details (id INT AUTO_INCREMENT NOT NULL, orders_id INT NOT NULL, product_quantity INT NOT NULL, price DOUBLE PRECISION NOT NULL, total_price DOUBLE PRECISION NOT NULL, INDEX IDX_845CA2C1CFFE9AD6 (orders_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE order_details_product (order_details_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_FE10BEE08C0FA77 (order_details_id), INDEX IDX_FE10BEE04584665A (product_id), PRIMARY KEY(order_details_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, creation_date DATE NOT NULL, status VARCHAR(150) NOT NULL, tracking_number VARCHAR(50) NOT NULL, INDEX IDX_E52FFDEEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, brand_id INT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(500) NOT NULL, picture VARCHAR(255) NOT NULL, price INT NOT NULL, stock INT NOT NULL, active SMALLINT NOT NULL, INDEX IDX_D34A04AD44F5D008 (brand_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE address ADD CONSTRAINT FK_D4E6F81A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ips_user ADD CONSTRAINT FK_DDCC9AF287610CAE FOREIGN KEY (ips_id) REFERENCES ips (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ips_user ADD CONSTRAINT FK_DDCC9AF2A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_details ADD CONSTRAINT FK_845CA2C1CFFE9AD6 FOREIGN KEY (orders_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE order_details_product ADD CONSTRAINT FK_FE10BEE08C0FA77 FOREIGN KEY (order_details_id) REFERENCES order_details (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE order_details_product ADD CONSTRAINT FK_FE10BEE04584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD44F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD44F5D008');
        $this->addSql('ALTER TABLE ips_user DROP FOREIGN KEY FK_DDCC9AF287610CAE');
        $this->addSql('ALTER TABLE order_details_product DROP FOREIGN KEY FK_FE10BEE08C0FA77');
        $this->addSql('ALTER TABLE order_details DROP FOREIGN KEY FK_845CA2C1CFFE9AD6');
        $this->addSql('ALTER TABLE order_details_product DROP FOREIGN KEY FK_FE10BEE04584665A');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE brand');
        $this->addSql('DROP TABLE ips');
        $this->addSql('DROP TABLE ips_user');
        $this->addSql('DROP TABLE order_details');
        $this->addSql('DROP TABLE order_details_product');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE product');
    }
}
