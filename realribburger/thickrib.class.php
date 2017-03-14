<?php

/**
 * thickrib
 * 
 * @package   
 * @author nerdkitchen
 * @copyright Tino Jahnke
 * @version 2017
 * @access public
 */
class thickrib extends meat{
    
    
    
    public $ingredients;
    public $equiptment;
 
      
    public function __construct(){
        
        
        $meatBag = $this->prepare();
        $meatball = $this->slowcook('4-12h',$meatbag);
        $thickrip = $this->grill('220C', '20 min',$meatball);  
        $this->serve($thickrip);        
        
    }
    
    
    
    public function prepare(){
                
        $specials[]=$this->ingredients->salt;
        $specials[]=$this->ingredients->thyme;
        $specials[]=$this->ingredients->rosemary;
        
                
        $meatInbag = $this->equiptment->human->layIn($this->equiptment->bag, $this->ingredients->thickrip, $this->ingredients->ayran, $specials);
        $coldMeatInBag = $this->equiptment->frdge->store($meatInbag);
        sleep(28800);
        $coldMeatInBag = $this->equiptment->frdge->unstore($meatInbag);
        return $coldMeatInBag; 
    
           
    }
    
    public function slowcook( $duration, $item){
            
            
        $this->equiptment->ofen->start('80-120C');
        $this->equiptment->pot->insert($item);
        $this->equpitment->human->place($this->equiptment->pot, $this->equiptment->ofen);
        sleep($duration);      
        return $this->equiptment->pot->remove($item);
        
            
    }
    
    public function grill( $duration, $duration, $item){
        
        return $this->equiptment->ofen->grill($temp, $duration, $item);
        
        
    }
    
    public function server(){
        
        
    }
    
    
    public function __destruct(){}
    public function __get($property){}
    public function __set($name, $value){
        
        
        $ingredientmap = array('thickrip','thyme','salt','vinegar', 'rosemary','ayran');
        $equiptmentmap= array('pot','ofen','panel','bag','fridge','human');
        
        foreach ($ingrmap AS $k => $v){            
            $this->ingredients->$k = new $$k();
        }
        
        foreach ( $equipmap AS $k => $v){
            $this->equiptment->$k = new $$k();
        }
        
        
    }
    
    
}