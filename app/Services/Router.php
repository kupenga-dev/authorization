<?php

namespace App\Services;
use App\Controllers\Auth;

class Router 
{
    private $authItem;

    private static $List = [];
    public function __construct()
    {
        $this->authItem = new Auth;
    }
    // Список всех url сайта
    public function __destruct()
    {
        $this->authItm = NULL;
    }
    

    // Метод заполнения url сайта
    public function page($uri, $page_name = null, $method = null, $formdata = false, $post = false)
    {    
        self::$List[] = [
            'uri' => $uri,
            'page' => $page_name,
            'method' => $method,
            'Formdata' => $formdata,
            'post' => $post
        ]; 
    }
    // 
    // Метод проверки вводимой ссылки с имеющийся в проекте
    //$route['post'] === 1 &&
    public function enable()
    {
        $query = $_GET['uri'];

        foreach (self::$List as $route)
        {
            if ($route['uri'] === '/' . $query)
            {
                if($route['post'] == 1 && $_SERVER['REQUEST_METHOD'] === 'POST')
                {
                    $method = $route['method'];
                    if($route['Formdata'] == 1)
                    {
                        $data = json_decode(file_get_contents("php://input"),true);
                        var_dump($data);
                        $this->authItem->$method($data);
                        die();
                    } else
                    {
                        $this->authItem->$method();
                        die();
                    }
                    
                } else {
                    require_once 'views/pages/' . $route['page'] . '.php';
                    die();
                }           
            }          
        }
        $this->page_not_found();    
    }  

    private function page_not_found()
    {
        require_once 'views/errors/eror.php';
        die();
    }

    // private static function isAjax()
    // {
    //     if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === "XMLHttpRequest")
    //     {
    //         return true;
    //     }
    //     return false;
    // }
    public static function redirect($uri)
    {
        return header('Location:' . $uri);
    }

}

?>