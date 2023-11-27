<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231116101427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE location ADD v_oiture_id INT DEFAULT NULL, ADD client_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CB2C53C18A FOREIGN KEY (v_oiture_id) REFERENCES voiture (id)');
        $this->addSql('ALTER TABLE location ADD CONSTRAINT FK_5E9E89CB19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_5E9E89CB2C53C18A ON location (v_oiture_id)');
        $this->addSql('CREATE INDEX IDX_5E9E89CB19EB6921 ON location (client_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE location DROP FOREIGN KEY FK_5E9E89CB2C53C18A');
        $this->addSql('ALTER TABLE location DROP FOREIGN KEY FK_5E9E89CB19EB6921');
        $this->addSql('DROP INDEX IDX_5E9E89CB2C53C18A ON location');
        $this->addSql('DROP INDEX IDX_5E9E89CB19EB6921 ON location');
        $this->addSql('ALTER TABLE location DROP v_oiture_id, DROP client_id');
    }
}
