<?php
require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\SessionHandler;

// Instantiate the DynamoDB client
$dynamoDb = new DynamoDbClient([
    'region'  => 'us-east-1',
    'version' => 'latest'
]);

// Configure the session handler
$sessionHandler = SessionHandler::fromClient($dynamoDb, [
    'table_name' => 'sessions',
]);

// Register the handler to override PHP's default file-based storage
$sessionHandler->register();
class Session
{
    public function start_session()
    {
        if(!isset($_SESSION))
        {
            //session_set_cookie_params(0,'/','https://www.nkwahia.com/',true,true);
            session_start();
        };
    }

    public function flush(): void
    {
        $this->start_session();
        session_destroy();
    }

    public function set($mykey, $myvalue = '')
    {
        $this->start_session();
        if(is_string($mykey))
        {
            $_SESSION[$mykey] = $myvalue;
        }
        else if(is_array($mykey))
        {
            foreach($mykey as $key => $value)
            {
                $_SESSION[$key] = $value;
            };
        }
    }

    public function append($arr)
    {
        $this->start_session();
        if(is_array($arr))
        {
            foreach($arr as $key => $value)
            {
                $_SESSION[$key] = $value;
            };
        }
    }

    public function get($key)
    {
        $this->start_session();
        if(isset($_SESSION[$key]))
        {
            return $_SESSION[$key];
        };
    }

    public function remove($key)
    {
        $this->start_session();
        if(isset($_SESSION[$key]))
        {
            unset($_SESSION[$key]);
        };
    }

    public function exist($key)
    {
        $this->start_session();
        if(isset($_SESSION[$key]))
        {
            return true;
        };
        return false;
    }

    public function regenerate()
    {
        if(!isset($_SESSION))
        {
            session_start();
        };
        session_regenerate_id();
    }
}

$ses = new Session();
$ses->start_session();

$con = mysqli_connect($_ENV["DB_URL"], $_ENV["DB_USER"], $_ENV["DB_PASS"],"goldchest");
//$con = mysqli_connect("gcdb-21-08-24-restore.c3lfpgicvuem.us-east-1.rds.amazonaws.com", "root", "2W^%H918m4e","goldchest");

// Check connection
  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }