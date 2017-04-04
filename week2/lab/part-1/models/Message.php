<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Message
 *
 * @author 001362065
 */
class Message implements IMessage {
    //put your code here
    
    protected $messages = [];
    
    
    public function addMessage($key, $msg) 
    {
        if ( !is_string($msg) ) {
            throw new Exception('only string allowed for msg');
        }
        $this->messages[$key] = $msg;
    }

    public function getAllMessages() 
    {
        return $this->messages;
    }

    public function removeMessage($key) 
    {
        if (array_key_exists($key, $this->messages)) 
        {
            unset($this->messages[$key]);
        }
    }
}
