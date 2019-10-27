<?php
class MscContent implements Content{

    public function view($cData) {
       echo strtoupper("Msc course content: ".$cData);
    }
    
}
