<?php

class StudentMaker{
    private  $itStudnet;
    private  $artStudnet;
    private  $eduStudnet;
    private  $engStudnet;
    private static $aMaker;

     private function __construct()
    {
        $this->itStudnet   = new ItStudent();
        $this->artStudnet  = new ArtStudent();
        $this->engStudnet = new EngStudent();
        $this->eduStudnet  = new EdeStudent();
    }


    public static function getaMaker() {
        
        if(self::$aMaker == NULL){
           
            self::$aMaker = new StudentMaker();
        }
        return self::$aMaker;
    }
    public function viewIT(){
        $this->itStudnet->view();
    }
    public function viewART(){
        $this->artStudnet->view();
    }
    public function viewEng(){
        $this->engStudnet->view();
    }
    public function viewEdu(){
        $this->eduStudnet->view();
    }

   
    
    
}