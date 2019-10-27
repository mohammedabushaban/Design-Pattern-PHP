<?php
class PhdDegree implements Degree{

    
    public function getTitle() {
        return new PhdTitle();
    }

    
    public function getContent() {
        return new PhDContent();
    }

    
    public function getTeacher() {
        return new PhdTeacher();
    }
    
}
