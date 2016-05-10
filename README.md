# PHP-Server-Class
Simple PHP Server Class

Usage :

  include "server.class.php";
  
  $instance = Server::getInstance();
  
  Gets datas from the $_SERVER.
  
    Example: $instance->REQUEST_TIME_FLOAT;
  
  @param    name    Name of the datas to get.
  
  @return   mixed   Datas stored in $_SERVER.
