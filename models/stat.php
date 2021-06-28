<?php


class Stats
{

    private string $name;
    private int $value;
    private float $percent;
    private string $cssClass;

/* Stats constructor.
git* @param string $name
* @param int $value
*/
    public function __construct(string $name, int $value)
    {
        $this->name = $name;
        $this->value = $value;
        $this->percent = $value/200*100;
        if($this->percent < 25){
            $this->cssClass = "lightBlue";
        }
        else if ($this->percent>=25 && $this->percent<50){
            $this->cssClass = "skyBlue";

        }
        else if($this->percent>=50 && $this->percent<75){
        $this->cssClass = "medBlue";

        }
        else if($this->percent >=75){
            $this->cssClass ="nightBlue";
        }

    }

/* @return string
*/
    public function getName(): string
    {
        return $this->name;
    }

/* @return int
*/
    public function getValue(): int
    {
        return $this->value;
    }

/* @return float
*/
    public function getPercent(): float
    {
        return $this->percent;
    }

    /**
     * @return string
     */
    public function getCssClass(): string
    {
        return $this->cssClass;
    }

}