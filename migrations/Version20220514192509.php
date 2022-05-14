<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220514192509 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE imb_Address (id INT AUTO_INCREMENT NOT NULL, country_code VARCHAR(2) NOT NULL, city VARCHAR(100) NOT NULL, street1 VARCHAR(100) NOT NULL, street2 VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_Category (id INT AUTO_INCREMENT NOT NULL, english_name VARCHAR(64) NOT NULL, arabic_name VARCHAR(64) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_branch (id INT AUTO_INCREMENT NOT NULL, company_id INT DEFAULT NULL, address_id INT DEFAULT NULL, english_name VARCHAR(64) NOT NULL, arabic_name VARCHAR(64) NOT NULL, phone_number INT NOT NULL, INDEX IDX_2E43A51B979B1AD6 (company_id), UNIQUE INDEX UNIQ_2E43A51BF5B7AF75 (address_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_cashier (id INT AUTO_INCREMENT NOT NULL, branch_id INT DEFAULT NULL, INDEX IDX_42056EF0DCD6CC49 (branch_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_company (id INT AUTO_INCREMENT NOT NULL, english_name VARCHAR(64) NOT NULL, arabic_name VARCHAR(64) NOT NULL, logo_path VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_customerInvoice (id INT AUTO_INCREMENT NOT NULL, order_id INT DEFAULT NULL, paid_amount DOUBLE PRECISION NOT NULL, returned_amount DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_5A30B74F8D9F6D38 (order_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_employee (id INT AUTO_INCREMENT NOT NULL, address_id INT DEFAULT NULL, company_id INT DEFAULT NULL, user_id INT DEFAULT NULL, english_first_name VARCHAR(64) NOT NULL, english_last_name VARCHAR(64) NOT NULL, arabic_first_name VARCHAR(64) NOT NULL, arabic_length_name VARCHAR(64) NOT NULL, phone_number VARCHAR(20) NOT NULL, gender INT NOT NULL, relation_ship_status INT NOT NULL, nationality VARCHAR(2) NOT NULL, employee_status INT NOT NULL, dob DATE NOT NULL, date_of_join DATE NOT NULL, designation INT NOT NULL, termination_date DATETIME NOT NULL, INDEX IDX_152ABBEBF5B7AF75 (address_id), INDEX IDX_152ABBEB979B1AD6 (company_id), UNIQUE INDEX UNIQ_152ABBEBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_expiredInventory (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_inventory (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, supplier_invoice_id INT DEFAULT NULL, branch_id INT DEFAULT NULL, expired_inventory_id INT DEFAULT NULL, quantity DOUBLE PRECISION DEFAULT NULL, bought_quantity DOUBLE PRECISION DEFAULT NULL, weight DOUBLE PRECISION DEFAULT NULL, bought_weight DOUBLE PRECISION DEFAULT NULL, import_date DATE NOT NULL, expiry_date DATE NOT NULL, INDEX IDX_276C57764584665A (product_id), INDEX IDX_276C577648783C14 (supplier_invoice_id), INDEX IDX_276C5776DCD6CC49 (branch_id), UNIQUE INDEX UNIQ_276C577641C0AEF5 (expired_inventory_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_order (id INT AUTO_INCREMENT NOT NULL, cashier_id INT DEFAULT NULL, employee_id INT DEFAULT NULL, total DOUBLE PRECISION NOT NULL, INDEX IDX_8FDD15502EDB0489 (cashier_id), INDEX IDX_8FDD15508C03F15C (employee_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_orderedProduct (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, order_id INT DEFAULT NULL, weight DOUBLE PRECISION DEFAULT NULL, INDEX IDX_463C26FA4584665A (product_id), INDEX IDX_463C26FA8D9F6D38 (order_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_product (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, price DOUBLE PRECISION NOT NULL, english_name VARCHAR(64) NOT NULL, arabic_name VARCHAR(64) NOT NULL, type INT NOT NULL, reorder_quantity DOUBLE PRECISION DEFAULT NULL, reorder_weight DOUBLE PRECISION DEFAULT NULL, chargeable_weight DOUBLE PRECISION DEFAULT NULL, INDEX IDX_D4B2050A12469DE2 (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_shift (id INT AUTO_INCREMENT NOT NULL, employee_id INT DEFAULT NULL, branch_id INT DEFAULT NULL, `in` DATETIME NOT NULL, `out` DATETIME NOT NULL, cashier VARCHAR(255) DEFAULT NULL, INDEX IDX_DFFFBD8D8C03F15C (employee_id), INDEX IDX_DFFFBD8DDCD6CC49 (branch_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_supplier (id INT AUTO_INCREMENT NOT NULL, address_id INT DEFAULT NULL, english_name VARCHAR(64) NOT NULL, arabic_name VARCHAR(64) NOT NULL, phone_number INT NOT NULL, UNIQUE INDEX UNIQ_D39FA234F5B7AF75 (address_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE imb_supplierInvoice (id INT AUTO_INCREMENT NOT NULL, supplier_id INT DEFAULT NULL, product_invoice VARCHAR(255) NOT NULL, INDEX IDX_3097B9CA2ADD6D8C (supplier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE imb_branch ADD CONSTRAINT FK_2E43A51B979B1AD6 FOREIGN KEY (company_id) REFERENCES imb_company (id)');
        $this->addSql('ALTER TABLE imb_branch ADD CONSTRAINT FK_2E43A51BF5B7AF75 FOREIGN KEY (address_id) REFERENCES imb_Address (id)');
        $this->addSql('ALTER TABLE imb_cashier ADD CONSTRAINT FK_42056EF0DCD6CC49 FOREIGN KEY (branch_id) REFERENCES imb_branch (id)');
        $this->addSql('ALTER TABLE imb_customerInvoice ADD CONSTRAINT FK_5A30B74F8D9F6D38 FOREIGN KEY (order_id) REFERENCES imb_order (id)');
        $this->addSql('ALTER TABLE imb_employee ADD CONSTRAINT FK_152ABBEBF5B7AF75 FOREIGN KEY (address_id) REFERENCES imb_Address (id)');
        $this->addSql('ALTER TABLE imb_employee ADD CONSTRAINT FK_152ABBEB979B1AD6 FOREIGN KEY (company_id) REFERENCES imb_company (id)');
        $this->addSql('ALTER TABLE imb_employee ADD CONSTRAINT FK_152ABBEBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE imb_inventory ADD CONSTRAINT FK_276C57764584665A FOREIGN KEY (product_id) REFERENCES imb_product (id)');
        $this->addSql('ALTER TABLE imb_inventory ADD CONSTRAINT FK_276C577648783C14 FOREIGN KEY (supplier_invoice_id) REFERENCES imb_supplierInvoice (id)');
        $this->addSql('ALTER TABLE imb_inventory ADD CONSTRAINT FK_276C5776DCD6CC49 FOREIGN KEY (branch_id) REFERENCES imb_branch (id)');
        $this->addSql('ALTER TABLE imb_inventory ADD CONSTRAINT FK_276C577641C0AEF5 FOREIGN KEY (expired_inventory_id) REFERENCES imb_expiredInventory (id)');
        $this->addSql('ALTER TABLE imb_order ADD CONSTRAINT FK_8FDD15502EDB0489 FOREIGN KEY (cashier_id) REFERENCES imb_cashier (id)');
        $this->addSql('ALTER TABLE imb_order ADD CONSTRAINT FK_8FDD15508C03F15C FOREIGN KEY (employee_id) REFERENCES imb_employee (id)');
        $this->addSql('ALTER TABLE imb_orderedProduct ADD CONSTRAINT FK_463C26FA4584665A FOREIGN KEY (product_id) REFERENCES imb_product (id)');
        $this->addSql('ALTER TABLE imb_orderedProduct ADD CONSTRAINT FK_463C26FA8D9F6D38 FOREIGN KEY (order_id) REFERENCES imb_order (id)');
        $this->addSql('ALTER TABLE imb_product ADD CONSTRAINT FK_D4B2050A12469DE2 FOREIGN KEY (category_id) REFERENCES imb_Category (id)');
        $this->addSql('ALTER TABLE imb_shift ADD CONSTRAINT FK_DFFFBD8D8C03F15C FOREIGN KEY (employee_id) REFERENCES imb_employee (id)');
        $this->addSql('ALTER TABLE imb_shift ADD CONSTRAINT FK_DFFFBD8DDCD6CC49 FOREIGN KEY (branch_id) REFERENCES imb_branch (id)');
        $this->addSql('ALTER TABLE imb_supplier ADD CONSTRAINT FK_D39FA234F5B7AF75 FOREIGN KEY (address_id) REFERENCES imb_Address (id)');
        $this->addSql('ALTER TABLE imb_supplierInvoice ADD CONSTRAINT FK_3097B9CA2ADD6D8C FOREIGN KEY (supplier_id) REFERENCES imb_supplier (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE imb_branch DROP FOREIGN KEY FK_2E43A51BF5B7AF75');
        $this->addSql('ALTER TABLE imb_employee DROP FOREIGN KEY FK_152ABBEBF5B7AF75');
        $this->addSql('ALTER TABLE imb_supplier DROP FOREIGN KEY FK_D39FA234F5B7AF75');
        $this->addSql('ALTER TABLE imb_product DROP FOREIGN KEY FK_D4B2050A12469DE2');
        $this->addSql('ALTER TABLE imb_cashier DROP FOREIGN KEY FK_42056EF0DCD6CC49');
        $this->addSql('ALTER TABLE imb_inventory DROP FOREIGN KEY FK_276C5776DCD6CC49');
        $this->addSql('ALTER TABLE imb_shift DROP FOREIGN KEY FK_DFFFBD8DDCD6CC49');
        $this->addSql('ALTER TABLE imb_order DROP FOREIGN KEY FK_8FDD15502EDB0489');
        $this->addSql('ALTER TABLE imb_branch DROP FOREIGN KEY FK_2E43A51B979B1AD6');
        $this->addSql('ALTER TABLE imb_employee DROP FOREIGN KEY FK_152ABBEB979B1AD6');
        $this->addSql('ALTER TABLE imb_order DROP FOREIGN KEY FK_8FDD15508C03F15C');
        $this->addSql('ALTER TABLE imb_shift DROP FOREIGN KEY FK_DFFFBD8D8C03F15C');
        $this->addSql('ALTER TABLE imb_inventory DROP FOREIGN KEY FK_276C577641C0AEF5');
        $this->addSql('ALTER TABLE imb_customerInvoice DROP FOREIGN KEY FK_5A30B74F8D9F6D38');
        $this->addSql('ALTER TABLE imb_orderedProduct DROP FOREIGN KEY FK_463C26FA8D9F6D38');
        $this->addSql('ALTER TABLE imb_inventory DROP FOREIGN KEY FK_276C57764584665A');
        $this->addSql('ALTER TABLE imb_orderedProduct DROP FOREIGN KEY FK_463C26FA4584665A');
        $this->addSql('ALTER TABLE imb_supplierInvoice DROP FOREIGN KEY FK_3097B9CA2ADD6D8C');
        $this->addSql('ALTER TABLE imb_inventory DROP FOREIGN KEY FK_276C577648783C14');
        $this->addSql('ALTER TABLE imb_employee DROP FOREIGN KEY FK_152ABBEBA76ED395');
        $this->addSql('DROP TABLE imb_Address');
        $this->addSql('DROP TABLE imb_Category');
        $this->addSql('DROP TABLE imb_branch');
        $this->addSql('DROP TABLE imb_cashier');
        $this->addSql('DROP TABLE imb_company');
        $this->addSql('DROP TABLE imb_customerInvoice');
        $this->addSql('DROP TABLE imb_employee');
        $this->addSql('DROP TABLE imb_expiredInventory');
        $this->addSql('DROP TABLE imb_inventory');
        $this->addSql('DROP TABLE imb_order');
        $this->addSql('DROP TABLE imb_orderedProduct');
        $this->addSql('DROP TABLE imb_product');
        $this->addSql('DROP TABLE imb_shift');
        $this->addSql('DROP TABLE imb_supplier');
        $this->addSql('DROP TABLE imb_supplierInvoice');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
