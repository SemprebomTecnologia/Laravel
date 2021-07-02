<?php
//$raiz = ($_SERVER['DOCUMENT_ROOT']);
//
//$pasta = ( $_SERVER['PHP_SELF']);
//
//echo $raiz.$pasta ;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once('conectar.class.php');
//include_once ('../adodb/adodb.inc.php');

 class Usuario extends Conectar{
    //public  $id;
    public  $user;
    private $passwordUser;
    
    public $path; 
            
    function __construct( ) {
          $this->user = NULL;
    }

    function getUser() {
        return $this->user;
    }

    function getPasswordUser() {
        return $this->passwordUser;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPasswordUser($passwordUser) {
        $this->passwordUser = $passwordUser;
    }

        
    function VerificaLogin($user , $pass) {     
        //include_once('../adodb/adodb.inc.php');    
        
        if ( !(empty($user) != NULL  )  &&  !(empty($pass) != NULL)){
            
            $conn = new Conectar();
            $db = $conn->ConectaBD();
            $result =  $db->Execute('select * from usuario');

            foreach ($result as $value){
              if (($user == $value[1]) && ($pass == $value[2])) {
                  session_start();
                  
                  header('Location: ./admin.php ');                      
                  return TRUE;
              }                      
            }
            
            return FALSE;
            
        }else{
            return FALSE;   
        }            
    }
    
    public function InsereUsuario(String $Codigo) {
        //insere um novo usuario na 

    } 
        
    
    
    
} // end of usuario


//$test = new Usuario();
//$t = $test->VerificaLogin('teste', 'teste');
//var_dump($t)

?>
