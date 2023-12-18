
<?php

class roleOfUser{

    private $roleName;
    private $userId;
    public function __construct($userId,$roleName){
        $this->userId = $userId;
        $this->roleName = $roleName;

}
    public function getRoleName(){
        return $this->roleName;
    }
    public function setRoleName($roleName) {
        $this->roleName = $roleName;
    }
    public function getuserId(){
        return $this->userId;

    }
}


?>