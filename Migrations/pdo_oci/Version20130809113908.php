<?php

namespace Claroline\AnnouncementBundle\Migrations\pdo_oci;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated migration based on mapping information: modify it with caution
 *
 * Generation date: 2013/08/09 11:39:09
 */
class Version20130809113908 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE claro_announcement MODIFY (
                content VARCHAR2(1023) NOT NULL
            )
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE claro_announcement MODIFY (
                content VARCHAR2(1023) DEFAULT NULL
            )
        ");
    }
}