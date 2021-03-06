<?php
// db/author.php
namespace  OCA\TimeTracker\Db;

use OCP\AppFramework\Db\Entity;

class Project extends Entity {

    public $id;
    public $name;
    public $clientId;
    public $createdByUserUid;
    public $createdAt;
    public $locked;


    public function __construct() {
        // add types in constructor
        
        $this->addType('id', 'integer');
        $this->addType('name', 'string');
        $this->addType('clientId', 'integer');
        $this->addType('createdByUserUid', 'string');
        $this->addType('createdAt', 'integer');
        $this->addType('locked', 'integer');
    }
}