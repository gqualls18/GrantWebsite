
<?php
    class Controller   {
        public function handleRequest()
        {
            /*Get the user's request$_SERVER[‘REQUEST_URI’]is an Apache web-server variable that retrievesthis web page’s path (after the domain or sub-domain name).*/
            $request = $_SERVER['REQUEST_URI'];
            /*__DIR__ is an Apache constant that retrieves the full directory of this current PHP file.*/
            $route = __DIR__;
            $route = str_replace("/Controller",NULL,$route);
            //Route the user to the correct view (template)
            switch ($request)
            {  
                case $this->con . '/':
                    //the . concatenates two strings
                    require $route . '/views/home.php';
                    break;
                case $this->con.'/about':
                    require $route . '/views/about.php';
                    break;
                case $this->con.'/skills':
                    require $route . '/views/skills.php';
                    break;
                case $this->con.'/projects' :
                    require $route . '/views/projects.php';
                    break;
                default:  http_response_code(404);require $route . '/views/404.php';
                break;
                    
            }
            
        }
    }
        
    
    
    
?>
