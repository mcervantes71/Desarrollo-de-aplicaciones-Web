<?php
    class App
    {
      	protected $controller = 'home';
      	protected $method = 'index';
      	protected $params = [];

      	public function __construct()
      	{
//$this->parseUrl();		// step 5
//print_r($this->parseUrl());	// step 8
    	      $url = $this->parseUrl();
// step 9
      	    if(file_exists('../app/controllers/' . $url[0] . '.php'))
            {
                $this->controller = $url[0];
                unset($url[0]);
            }
//echo $this->controller;
            require_once '../app/controllers/' . $this->controller . '.php';

      	    $this->controller = new $this->controller;

      	    if(isset($url[1]))
      	    {
      	        if(method_exists($this->controller, $url[1]))
      		      {
//echo 'Ok';
                    $this->method = $url[1];
                    unset($url[1]);
      		      }
      	    }
//echo $this->method;

    	      $this->params = $url ? array_values($url) : [];
//print_r($this->params);

      	    call_user_func_array([$this->controller, $this->method], $this->params);
      	}

      	public function parseUrl()
      	{
      	    if(isset($_GET['url']))
      	    {
//echo $_GET['url'];		//step 5
      		      return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));  // step 8
      	    }
      	}
    }
