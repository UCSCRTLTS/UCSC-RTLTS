<?php
/*************************************************************************
* Class Name:       lectures
* File Name:        class.user.php
* Generated:        Thursday, Sep 15, 2011 - 6:39:33 UTC
*  - for Table:     user
*   - in Database:  user
**************************************************************************/
require_once 'connection.inc.php';

class lectures {
        private $userId;
        private $username;
        private $firstname;
        private $lastname;
        private $email;
        private $passsword;

    public function __construct() 
    {
        //get table 
        $this->$tableMaster ='lectures';
                 
        //get variables from html form
        $this->userId   = mysql_fetch_object();
        $this->userNeme = $_get['userNmae'];
        $this->firstName = $_get['firstName'];
        $this->lastName = $_get['lastName'];
        $this->macId = $_get['macId'];
        $this->email = $_get['email'];
        $this->password = $_get(md5['password']);
        
        $this->doadd();
    }
    
    private function doadd()
            {
        $this->userId = NULL ;
        $this->sql = "INSERT INTO $this->tableMaster(userId,userName,firstName,lastName,emial,password) VALUES ($this->userId,$this->userNeme,$this->firstName,$this->lastName,$this->macId,$this->email,$this->password)";
        try
        {
            $this->query($this->$sql);
            printf($this->$userName.'registerd successfully');
            
        }catch(Exception $e)
        {
            echo 'there is a problem';
            exit();
        }
        
    
        }
        private function delete() 
                {
            try{
            $this->sql = "DELET FROM $this->tableMaster WHERE $this->username = $this->user";
            $this->mysql_query($this->$sql);
            }catch (Exception $e)
            {
                echo 'delet failed';
                exit();
            }
        }
}
?>
