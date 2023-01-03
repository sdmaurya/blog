<?php
        $url_requested = $_SERVER['REQUEST_URI'];
        $url_len = strlen($url_requested);
        
        $actual_path = substr($url_requested,strpos($url_requested,'/'),$url_len); 
    
        if($actual_path == "/"){
            $page_title = "Php route project - Home";
            include_once('index.php');
        }    
        else if(preg_match("!/about/[a-z,A-Z,0-9]!",$actual_path)){
            $actual_route = substr($actual_path,(strrpos($actual_path,'/')+1),$url_len);
            $actual_route = str_replace("%20"," ",$actual_route);  
            $data_arr = [
                'content_to_show' => $actual_route
            ];      
            $page_title = "Php route project - ".$actual_route;
            include_once('about.php');
        }
        else if($actual_path == "/about"){        
            $page_title = "Php route project - about";
            include_once('about.php');
        }
        else if($actual_path == "/service"){
            $page_title = "Php route project - service";
            include_once('service.php');
        }    
        else if($actual_path == "/product"){
            $page_title = "Php route project - product";
            include_once('product.php');
        }    
        else {
            $page_title = "error 404 not found!";
            include_once('404.php');
        }
    ?>