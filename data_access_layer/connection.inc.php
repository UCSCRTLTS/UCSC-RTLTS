<?php
class conectdb
{
private $host="localhost";
private $user="root";
private $password="";
private $db="rtlts-admin";
private $con = "";

public function connect()   
    {
        if(!$this->con)
               {
        $mycon = @mysql_connect($this->host,$this->user,$this->password);
        if ($mycon)
                    {
                            $select_db= @mysql_select_db($this->db,$mycon);
                                    if ($select_db)
                                            {
                                                    $this->con = true;
                                                    echo "connected";
                                                    return true;
                                            }else
                                                
                                            {
                                                    echo "connection failed";
                                                    return false;
                                            }
                    }else
                        
                    {
                            return false;
                    }
               }else
    {
        return true;
    }


                    }
public function disconnect()    
                {
                        if($this->con)
                                {
                                if(@mysql_close())
                                        {
                                                $this->con = false;
                                                return true;
                                        }
                                        else
                                        {
                                        return false;
                                        }
                                }
                }
}
$db = new conectdb();
$db->connect();

