<?php

/**
 * toppingliquid
 * 
 * @package nerdkitchen
 * @author 
 * @copyright 2017
 * @version $Id$
 * @access public
 */
class toppingliquid {
    
 
 
    public $ingredients;
    public $equiptment;
 
    
    /**
     * toppingliquid::boil()
     * 
     * @param mixed $time
     * @param mixed $obj
     * @return
     */
    protected function boil( $time, $obj){
        
        do {
            
            $b->cook($time);
            
            if($b->status == 'porkbelly fat is leaked'){
                
                $b->add($this->ingredients->cocunutsugar);
                $b->add($this->ingredients->vinegar);
                $b->add( $this->ingredients->honey);
                $b->add($this->ingredients->worcester);
            
            }
            
            
        
        } while($this->equiptment->ofen->timecounter <> $time);
        
        return $b;
        
    }
    
    /**
     * toppingliquid::server()
     * 
     * @return
     */
    protected function serve(){
        
    
    }
    
    /**
     * toppingliquid::prepare()
     * 
     * @return
     */
    protected function prepare(){
        
        $a = $this->ingredients->porbelly->cut('littlepieces', $this->equiptment->cookingknife);
        $a.= $this->ingredients->flitch->cut('littlepieces', $this->equiptment->cookingknife);
               
        $b = $this->equiptment->frypan->set($this->equiptment->ofen->activate());
        
        if($b->temperature ==__HOT){
            $b->recieve($a);
        }
        
        
        return $b;
        
        
        
    }
    
    
    
    /**
     * toppingliquid::__construct()
     * 
     * @return
     */
    public function __construct(){
    
    
        $a = $this->prepare();
        sleep(180);
        $this->boil('3h',$a);
        $this->serve();
        
    
    }
    
    /**
     * toppingliquid::__destruct()
     * 
     * @return
     */
    public function __destruct(){
        
        new tablepreps($this);
        
        
    }
    
    /**
     * toppingliquid::__get()
     * 
     * @param mixed $property
     * @return
     */
    public function __get($property){
        
    }
 
    /**
     * toppingliquid::__set()
     * 
     * @param mixed $name
     * @param mixed $value
     * @return
     */
    public function __set($name, $value){
        
        $ingrmap = array('porkbelly','flitch','cocunutsugar','vinegar', 'honey','worcester');
        $equipmap= array('cooker','frypan','cuttingboard','cookingknife');
        
        foreach ($ingrmap AS $k => $v){
            
            $this->ingredients->$k = new $$k();
            
        }
        
        foreach ( $equipmap AS $k => $v){
            
            $this->equiptment->$k = new $$k();
        }
        
        
        
    }
 


    
}
    
?>