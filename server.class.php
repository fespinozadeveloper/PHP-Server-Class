<?php
class Server
{
    private static $instance;
    
    private function __construct() {}
    
	public static function getInstance()
    {
        if ( !isset(self::$instance))
        {
            self::$instance = new self;
        }
        
        return self::$instance;
    }
	
    /**
    *    Gets datas from the server.
    *    Example: $instance->REQUEST_TIME_FLOAT;
    *    
    *    @param    name    Name of the datas to get.
    *    @return    mixed    Datas stored in server.
    **/
    
    public function __get( $name )
    {
        if ( isset($_SERVER[$name]))
        {
            return $_SERVER[$name];
        }
		else
		{
			return false;
		}
    }
}
?>