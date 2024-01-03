<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240103131111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE releves (id INT AUTO_INCREMENT NOT NULL, lieu_id INT NOT NULL, date DATE NOT NULL, releve_brut VARCHAR(255) NOT NULL, INDEX IDX_6F62B66E6AB213CC (lieu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE releves ADD CONSTRAINT FK_6F62B66E6AB213CC FOREIGN KEY (lieu_id) REFERENCES lieu (id)');
        $this->addSql('ALTER TABLE relevés DROP FOREIGN KEY FK_1749EDA56AB213CC');
        $this->addSql('DROP TABLE relevés');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE relevés (id INT AUTO_INCREMENT NOT NULL, lieu_id INT NOT NULL, date DATE NOT NULL, rbrut VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_1749EDA56AB213CC (lieu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE relevés ADD CONSTRAINT FK_1749EDA56AB213CC FOREIGN KEY (lieu_id) REFERENCES lieu (id)');
        $this->addSql('ALTER TABLE releves DROP FOREIGN KEY FK_6F62B66E6AB213CC');
        $this->addSql('DROP TABLE releves');
    }
}
