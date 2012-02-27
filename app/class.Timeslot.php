<?php

class Timeslot
{
    
    private $start = null;
    private $length = null;

    public function _construct($start, $length)
    {
       $this->start = $start;
	   $this->length = $length;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getLength()
    {
        return $this->length;
    }
	
	public function occupySlot($connection) {
		
	}
	
}

?>