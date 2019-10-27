<?php
class PhDContent implements Content{
    
    public function view($cData) {
    	echo strtoupper("PhD course content: ".$cData); 
    
       
    }
    
}
