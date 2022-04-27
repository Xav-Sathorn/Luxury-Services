<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220426135931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, user_gender VARCHAR(255) NOT NULL, user_first_name VARCHAR(255) NOT NULL, user_last_name VARCHAR(255) NOT NULL, user_address VARCHAR(255) NOT NULL, user_country VARCHAR(255) NOT NULL, user_nationality VARCHAR(255) NOT NULL, user_passport TINYINT(1) NOT NULL, user_passport_file VARCHAR(255) NOT NULL, user_current_location VARCHAR(255) NOT NULL, user_experience VARCHAR(255) NOT NULL, user_description VARCHAR(255) NOT NULL, user_date_of_birth DATE NOT NULL, user_place_of_birth VARCHAR(255) NOT NULL, user_email VARCHAR(255) NOT NULL, user_pwd VARCHAR(255) NOT NULL, get_new_pwd VARCHAR(255) NOT NULL, is_available TINYINT(1) NOT NULL, user_category VARCHAR(255) NOT NULL, is_admin TINYINT(1) NOT NULL, add_user_notes VARCHAR(255) NOT NULL, profile_created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', profile_updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', profile_deleted_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', user_cv VARCHAR(255) NOT NULL, user_pp VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
