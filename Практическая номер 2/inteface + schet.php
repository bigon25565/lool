<?php
trait GiveSumm{
    public function GiveSumm()
    {
        $this->vars[$number] = $number;
    }    
}
interface SchetInterface
{
    public function GiveSumm();
    public function GiveDate();
}
class Schet implements SchetInterface
{
    use GiveSumm;
    private $summ;
    private $number;
    private $date;
  

    public function GiveDate()
    {
        $this->vars[$date] = $date;
    }
}