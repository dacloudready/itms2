<?php 

use App\Models\UsersModel;

    function getUserName($userid){
       if(session()->has('logged_in'))
       {
           $loggedID = session()->get('userid');
           if($loggedID == $userid) 
           {
               $username = session()->get('username');
           }else{
                $user = new UsersModel();
                $userdata = $user->where('id', $userid)->findAll();
                if( count($userdata) != 0)
                {
                    $username = $userdata[0]['username'];
                }else{
                    $username = "";
                }
            }
        return $username;
       }
    }


    function getUserFullName($username)
    {
        $user = new UsersModel();
        $result =$user->where('username', $username)->findAll();
        $userfullname = ( count($result) != 0) ? $result[0]['name'] : NULL;
        return $userfullname;
    }

?>