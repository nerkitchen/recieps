<?php

/**
 * @author Nerdkitchen
 * @copyright 2017
 */


class coleslaw
{


    public $ingredients;
    public $equiptment;
    private $fridge;


    protected function cut($ingredients, $level, $speed)
    {

        $cc = new ChaffCutter();

        $cc->activate($speed);
        $chaff = $cc->cut($ingredients, $level);
        $cc->activate(($speed - $speed));

        return $chaff;

    }


    protected function stir($speed = 1, $input, $container)
    {
        return true;
    }

    protected function fill($speed = 1, $input, $container)
    {
        return true;
    }


    protected function quirl($speed = 1, $input)
    {
        return true;
    }


    protected function prepare($ingredients)
    {

        $bowl = $this->equiptment->bowl;
        $pot  = $this->equiptment->pot;

        $bowl.= $this->cut($this->ingredients->cole, 2, 3);
        $bowl.= $this->cut($this->ingredients->carrot, 2, 3);

        return $bowl;

    }
    protected function admix($ingredients)
    {

        $bowl = $ingredients->bowl;
        $ingr = array('mayonnaise' => $this->ingredients->mayonnaise, 'ayran' => $this->
                ingredients->ayran);

        $sauce = $this->quirl($this->fill(1, $ingr, $pot));
        $bowl = $this->stir(1, $sauce, $bowl);
        return $bowl;
    }

    public function flavor($input, $level)
    {
        
        
        return $output;
    }


    public function __construct()
    {

        $this->initializeReciept();

        $bowl = $this->admix($this->prepare());
        $bowl = $this->flavour();
        sleep(86400);

        return $bowl;

    }


    public function initializeReciept($size = 1)
    {


        if (!in_array('mayonnaise', $this->fridge)) {
            $mayonese = new Mayonnaise('raw');
        }


        $this->ingredients = (object)array(
            'cole' => '1',
            'carrot' => '2',
            'mayonnaise' => '2',
            'salt' => '2',
            'pepper' => '2',
            'vinegar' => '2',
            'oil' => '1');

    }

    public function __destruct()
    {

    }


}


?>