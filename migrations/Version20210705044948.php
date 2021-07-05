<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210705044948 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add relation between CompanyRegistredPlayer and RegisteredCompany.';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company_registered_player ADD registered_company_id INT NOT NULL');
        $this->addSql('ALTER TABLE company_registered_player ADD CONSTRAINT FK_D008B9DC56E7DC6A FOREIGN KEY (registered_company_id) REFERENCES registered_company (id)');
        $this->addSql('CREATE INDEX IDX_D008B9DC56E7DC6A ON company_registered_player (registered_company_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE company_registered_player DROP FOREIGN KEY FK_D008B9DC56E7DC6A');
        $this->addSql('DROP INDEX IDX_D008B9DC56E7DC6A ON company_registered_player');
        $this->addSql('ALTER TABLE company_registered_player DROP registered_company_id');
    }
}
