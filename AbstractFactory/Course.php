<?php
class Course {
    private $aTitle;
    private $aContent;
    private $aTeacher;
    private $aDegree;
    private static  $aCourse;

     private function __construct()
     {
         
     }
  

    public static function getaCourse() {
        if(self::$aCourse == null)
            self::$aCourse = new Course();
        return self::$aCourse;
    }

    public function setaDegree($aDegree) {
        $this->aDegree = $aDegree;
    }
    public function view($tData, $cData, $hData){
        $this->aTitle = $this->aDegree->getTitle();
        $this->aContent = $this->aDegree->getContent();
        $this->aTeacher = $this->aDegree->getTeacher();
        echo "View Course Data ...";
        $this->aTitle->view($tData);
        $this->aContent->view($cData);
        $this->aTeacher->view($hData);
       echo"======================================";
        
    }
    
}
