<?php
// db/author.php
namespace  OCA\TimeTracker\Db;

use OCP\AppFramework\Db\Entity;

class WorkInterval extends Entity {

    public $id;
    public $name;
    public $projectId;
    public $userUid;
    public $start;
    public $duration;
    public $running;


    public function __construct() {
        // add types in constructor
        
        $this->addType('id', 'integer');
        $this->addType('name', 'string');
        $this->addType('projectId', 'integer');
        $this->addType('userUid', 'string');
        $this->addType('start', 'integer');
        $this->addType('duration', 'integer');
        $this->addType('running', 'integer');
    }
}
