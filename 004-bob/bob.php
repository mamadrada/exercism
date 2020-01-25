<?php

class Bob
{
    public function respondTo($phrase) {
    	if(preg_match('/[A-Z]+\?/', $phrase)){
    		return "Calm down, I know what I'm doing!";
    	}elseif (preg_match('/[A-Z]/', $phrase) && !preg_match('/[a-z]/', $phrase)) {
            return "Whoa, chill out!";
        } elseif (preg_match('/\?\s*$/', $phrase)) {
        	return "Sure.";
        } elseif (preg_match('/^\s*$/', $phrase)) {
            return "Fine. Be that way!";
        }
        return 'Whatever.';
    }
}
