<?php
 class BscDegree implements Degree{

     
    public function getTitle() {
        return new BscTitle();
    }

     
    public function getContent() {
        return new BscContent();
    }

     
    public function getTeacher() {
        return new BscTeacher();
    }
    
}
