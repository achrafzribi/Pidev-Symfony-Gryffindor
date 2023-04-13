<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230407061027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1ED13A43DE FOREIGN KEY (M_id) REFERENCES paiement_method (id)');
        $this->addSql('CREATE INDEX IDX_B1DC7A1ED13A43DE ON paiement (M_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1ED13A43DE');
        $this->addSql('DROP INDEX IDX_B1DC7A1ED13A43DE ON paiement');
    }
}
