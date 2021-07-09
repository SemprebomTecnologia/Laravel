<?php
    define("hostname","sisfacil.mysql.uhserver.com");
    define("userID","adminsys");
    define("pass","Semprebom@281016");
    define("database","sisfacil"); 
    
    

    class Conectar {
        
       //private $conn = '';
        
        function __construct(){
          echo 'chamada de classe Conexao <br>';
          //$this->ConectaBD();
          
        }

        public static final  function ConectaBD() {
            
            $filename = $_SERVER['DOCUMENT_ROOT'].'/sisfacilphp7/admin/sys/adodb/adodb.inc.php';
            
            
            if (file_exists($filename)) {
                include_once($filename);  
            } else {
                echo "The file $filename does not exist <br>";
                echo '<br>'.$pasta;
            }
            
             
            //$driver = 'mysqli';
            $db = ADONewConnection('mysqli') ; //or die (mysql_error()); 
            //$db->debug = TRUE;
            //$db->PConnect(hostname, userID, pass, database);
            $db->connect(hostname, userID, pass, database);
            // $r = $db->execute('select * from usuario');
                               
            if ($db->isConnected()){
                //return (object) $db;
                //session_start();
                //session_register($db);
                return $db;
            }else{
                $db->close();
                return FALSE;
                
            }  
        }
        
    }
    
       
?>