<?php
    class Home extends Controller
    {
    	//public function index()		// step 6
    	public function index($name = '', $last = '')	// step 9
    	{
    	    //echo 'home/index';		// step 6
    	    //echo "$name $last";		// step 9

    	    $user = $this->model('User');	// step 10
    	    $user->name = $name;
    	    $user->last_name = $last;
//echo "$user->name $user->last_name";

    	    $this->view('home/index', ['name' => $user->name]);	//step 11
    	}
    }
