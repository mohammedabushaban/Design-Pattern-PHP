<?php
class MscTeacher implements Teacher{

    
    public function view($hData) {
    	 echo strtoupper("Msc Course Teacher: ".$hData);
       
    }
    
}
