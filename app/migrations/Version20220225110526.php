<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220225110526 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_content DROP FOREIGN KEY FK_1317741E7294869C');
        $this->addSql('ALTER TABLE article_widget_association DROP FOREIGN KEY FK_5A3E957294869C');
        $this->addSql('ALTER TABLE articles_categories DROP FOREIGN KEY FK_DE004A0E7294869C');
        $this->addSql('ALTER TABLE articles_tags DROP FOREIGN KEY FK_354053617294869C');
        $this->addSql('ALTER TABLE mostclicked DROP FOREIGN KEY FK_5F119FBE7294869C');
        $this->addSql('ALTER TABLE vg_wort DROP FOREIGN KEY FK_4264E7FE7294869C');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F84A0A3ED');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E663DCCF9CE');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66F675F31B');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C6C55574');
        $this->addSql('ALTER TABLE articles_categories DROP FOREIGN KEY FK_DE004A0E12469DE2');
        $this->addSql('ALTER TABLE mostclicked DROP FOREIGN KEY FK_5F119FBE12469DE2');
        $this->addSql('ALTER TABLE toptags DROP FOREIGN KEY FK_CBC33D3C12469DE2');
        $this->addSql('ALTER TABLE notification DROP FOREIGN KEY FK_BF5476CA71F7E88B');
        $this->addSql('ALTER TABLE subscriptions_events DROP FOREIGN KEY FK_7778274B71F7E88B');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E663DA5256D');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E666252C796');
        $this->addSql('ALTER TABLE failed_delivery DROP FOREIGN KEY FK_43C2E38EF1A9D84');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E669393F8FE');
        $this->addSql('ALTER TABLE failed_delivery DROP FOREIGN KEY FK_43C2E389A1887DC');
        $this->addSql('ALTER TABLE subscriptions_events DROP FOREIGN KEY FK_7778274B9A1887DC');
        $this->addSql('ALTER TABLE articles_tags DROP FOREIGN KEY FK_35405361BAD26311');
        $this->addSql('ALTER TABLE toptags DROP FOREIGN KEY FK_CBC33D3CBAD26311');
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E6629C1004E');
        $this->addSql('ALTER TABLE article_content DROP FOREIGN KEY FK_1317741E29C1004E');
        $this->addSql('ALTER TABLE article_widget_association DROP FOREIGN KEY FK_5A3E95FBE885E2');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, username VARCHAR(30) NOT NULL, email VARCHAR(100) NOT NULL, password VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_content');
        $this->addSql('DROP TABLE article_widget_association');
        $this->addSql('DROP TABLE articles_categories');
        $this->addSql('DROP TABLE articles_tags');
        $this->addSql('DROP TABLE author');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE failed_delivery');
        $this->addSql('DROP TABLE feed');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE job_unit');
        $this->addSql('DROP TABLE migration_versions');
        $this->addSql('DROP TABLE mostclicked');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE partner');
        $this->addSql('DROP TABLE social');
        $this->addSql('DROP TABLE subscription');
        $this->addSql('DROP TABLE subscriptions_events');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE toptags');
        $this->addSql('DROP TABLE vg_wort');
        $this->addSql('DROP TABLE video');
        $this->addSql('DROP TABLE widget');
        $this->addSql('ALTER TABLE blog CHANGE image image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, author_id INT DEFAULT NULL, video_id INT DEFAULT NULL, main_category_id INT NOT NULL, initial_author_id INT DEFAULT NULL, image_id INT DEFAULT NULL, partner_id INT DEFAULT NULL, job_unit_id INT DEFAULT NULL, ausy_id VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, videolocation INT DEFAULT NULL, promo_video TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, keywords VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, short_id INT DEFAULT NULL, introduction LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, moved_to VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, redirected_to VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, sponsored TINYINT(1) NOT NULL, top TINYINT(1) NOT NULL, ausy_created_at DATETIME NOT NULL, ausy_updated_at DATETIME DEFAULT NULL, url_id INT DEFAULT NULL, type VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, source VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, display_date DATETIME DEFAULT NULL, published TINYINT(1) DEFAULT NULL, initial_title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX ausy_updated_at_idx (ausy_updated_at), INDEX IDX_23A0E663DCCF9CE (initial_author_id), INDEX IDX_23A0E666252C796 (job_unit_id), INDEX IDX_23A0E669393F8FE (partner_id), INDEX IDX_23A0E66C6C55574 (main_category_id), INDEX IDX_23A0E66F675F31B (author_id), INDEX type_idx (type), UNIQUE INDEX UNIQ_23A0E6629C1004E (video_id), UNIQUE INDEX UNIQ_23A0E663DA5256D (image_id), UNIQUE INDEX UNIQ_23A0E66DA076D76 (ausy_id), UNIQUE INDEX url_id_type_unique (url_id, type), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE article_content (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, video_id INT DEFAULT NULL, list_items JSON CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:json_array)\', `order` INT NOT NULL, style INT NOT NULL, headline VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, text LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, widget LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_1317741E7294869C (article_id), UNIQUE INDEX UNIQ_1317741E29C1004E (video_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE article_widget_association (id INT AUTO_INCREMENT NOT NULL, article_id INT DEFAULT NULL, widget_id INT DEFAULT NULL, param LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', INDEX IDX_5A3E957294869C (article_id), INDEX IDX_5A3E95FBE885E2 (widget_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE articles_categories (article_id INT NOT NULL, category_id INT NOT NULL, INDEX IDX_DE004A0E12469DE2 (category_id), INDEX IDX_DE004A0E7294869C (article_id), PRIMARY KEY(article_id, category_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE articles_tags (article_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_354053617294869C (article_id), INDEX IDX_35405361BAD26311 (tag_id), PRIMARY KEY(article_id, tag_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE author (id INT AUTO_INCREMENT NOT NULL, ausy_id VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, display_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, googleplusid VARCHAR(200) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, slug VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, vg_wort_id VARCHAR(32) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, first_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, last_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_BDAFD8C8989D9B62 (slug), UNIQUE INDEX UNIQ_BDAFD8C8DA076D76 (ausy_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, title_name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, icon VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, updated_at DATETIME NOT NULL, tracking_id INT NOT NULL, type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_3BAE0AA75E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE failed_delivery (id INT AUTO_INCREMENT NOT NULL, subscription_id INT DEFAULT NULL, notification_id INT DEFAULT NULL, latestDate DATETIME NOT NULL, nrTries INT DEFAULT NULL, status SMALLINT DEFAULT 0 COMMENT \'0 = failed, 1 = successful\', INDEX IDX_43C2E389A1887DC (subscription_id), INDEX IDX_43C2E38EF1A9D84 (notification_id), UNIQUE INDEX subscription_id_notification_id_unique (subscription_id, notification_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE feed (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, type VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, url VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, elements LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, content_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, optional_url VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, subtitle LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, is_large TINYINT(1) NOT NULL, url VARCHAR(1000) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, source VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_C53D045F84A0A3ED (content_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE job_unit (id INT AUTO_INCREMENT NOT NULL, jobGroup VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, job VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, jobId VARCHAR(4) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_5B777A1256D231E7 (jobId), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE migration_versions (version VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, PRIMARY KEY(version)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE mostclicked (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, article_id INT DEFAULT NULL, `rank` INT NOT NULL, type VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_5F119FBE12469DE2 (category_id), INDEX IDX_5F119FBE7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, event_id INT DEFAULT NULL, date DATETIME NOT NULL, receive_date DATETIME NOT NULL, entity_id INT NOT NULL, payload VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_BF5476CA71F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE partner (id INT AUTO_INCREMENT NOT NULL, ir_partner_id INT NOT NULL, raw_data LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, UNIQUE INDEX ir_partner_id (ir_partner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE social (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, count INT DEFAULT NULL, url VARCHAR(200) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, article_id INT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE subscription (id INT AUTO_INCREMENT NOT NULL, payloadUrl VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, active TINYINT(1) NOT NULL, secret VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, confirmed TINYINT(1) NOT NULL, createdAt DATETIME NOT NULL, updatedAt DATETIME NOT NULL, apiKey VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE subscriptions_events (subscription_id INT NOT NULL, event_id INT NOT NULL, INDEX IDX_7778274B71F7E88B (event_id), INDEX IDX_7778274B9A1887DC (subscription_id), PRIMARY KEY(subscription_id, event_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, display_name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, updated_at DATETIME NOT NULL, related_tags LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE toptags (id INT AUTO_INCREMENT NOT NULL, category_id INT DEFAULT NULL, tag_id INT DEFAULT NULL, `rank` INT NOT NULL, type VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_CBC33D3C12469DE2 (category_id), INDEX IDX_CBC33D3CBAD26311 (tag_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE vg_wort (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, authorId INT NOT NULL, token VARCHAR(32) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, createdAt DATETIME NOT NULL, updatedAt DATETIME NOT NULL, success TINYINT(1) DEFAULT NULL, errorMessage VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_4264E7FE7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, autoplay TINYINT(1) NOT NULL, promo TINYINT(1) DEFAULT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, subtitle VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, kaltura_id VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE widget (id INT AUTO_INCREMENT NOT NULL, name LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E6629C1004E FOREIGN KEY (video_id) REFERENCES video (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E663DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON UPDATE NO ACTION ON DELETE SET NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E663DCCF9CE FOREIGN KEY (initial_author_id) REFERENCES author (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E666252C796 FOREIGN KEY (job_unit_id) REFERENCES job_unit (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E669393F8FE FOREIGN KEY (partner_id) REFERENCES partner (id) ON UPDATE NO ACTION ON DELETE SET NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C6C55574 FOREIGN KEY (main_category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66F675F31B FOREIGN KEY (author_id) REFERENCES author (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE article_content ADD CONSTRAINT FK_1317741E29C1004E FOREIGN KEY (video_id) REFERENCES video (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE article_content ADD CONSTRAINT FK_1317741E7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON UPDATE NO ACTION ON DELETE SET NULL');
        $this->addSql('ALTER TABLE article_widget_association ADD CONSTRAINT FK_5A3E957294869C FOREIGN KEY (article_id) REFERENCES article (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE article_widget_association ADD CONSTRAINT FK_5A3E95FBE885E2 FOREIGN KEY (widget_id) REFERENCES widget (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE articles_categories ADD CONSTRAINT FK_DE004A0E12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE articles_categories ADD CONSTRAINT FK_DE004A0E7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE articles_tags ADD CONSTRAINT FK_354053617294869C FOREIGN KEY (article_id) REFERENCES article (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE articles_tags ADD CONSTRAINT FK_35405361BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE failed_delivery ADD CONSTRAINT FK_43C2E389A1887DC FOREIGN KEY (subscription_id) REFERENCES subscription (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE failed_delivery ADD CONSTRAINT FK_43C2E38EF1A9D84 FOREIGN KEY (notification_id) REFERENCES notification (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F84A0A3ED FOREIGN KEY (content_id) REFERENCES article_content (id) ON UPDATE NO ACTION ON DELETE SET NULL');
        $this->addSql('ALTER TABLE mostclicked ADD CONSTRAINT FK_5F119FBE12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE mostclicked ADD CONSTRAINT FK_5F119FBE7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE notification ADD CONSTRAINT FK_BF5476CA71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE subscriptions_events ADD CONSTRAINT FK_7778274B71F7E88B FOREIGN KEY (event_id) REFERENCES event (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subscriptions_events ADD CONSTRAINT FK_7778274B9A1887DC FOREIGN KEY (subscription_id) REFERENCES subscription (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE toptags ADD CONSTRAINT FK_CBC33D3C12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE toptags ADD CONSTRAINT FK_CBC33D3CBAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vg_wort ADD CONSTRAINT FK_4264E7FE7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE blog CHANGE image image LONGBLOB NOT NULL');
    }
}
