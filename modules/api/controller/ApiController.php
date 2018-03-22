<?php
/**
 * @package api
 * @version 0.0.1
 * @upgrade true
 */

class ApiController extends \Controller 
{
    public function notFoundAction(){
        return $this->show404();
    }
    
    public function show404(){
        $this->resp('Not Found', 404);
    }
    
    public function resp($data, $error, $append=null){
        $resp = [
            'error' => $error,
            'data' => $data
        ];
        if($append)
            $resp = array_merge($resp, $append);
        
        $this->ajax($resp);
    }
}