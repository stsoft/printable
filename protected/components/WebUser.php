<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class WebUser extends CWebUser{
    private $_model;
    
    function getPrename(){
        $user = $this->loadUser(Yii::app()->user->name);
        return $user->prename;
    }
    
    function isAdmin(){
        $user = $this->loadUser(Yii::app()->user->name);
        if($user == null){
            return 0;
        }
        return $user->admin;
    }
    
      // Load user model.
    protected function loadUser($username=null) {
        if($this->_model===null)
        {
            if($username!==null){
                $user = User::model()->findByAttributes( array( 'username' => $username));
            }
        }
        return $user;
    }
  
}

