<?php


class Ability
{
    private string $name;
    private bool $isHidden;
    private string $desc;

    /**
     * Pokemon constructor.
     * @param string $name
     * @param bool $isHidden
     * @param string $desc
     */
    public function __construct(string $name, bool $isHidden, string $desc)
    {
        $this->name = $name;
        $this->isHidden = $isHidden;
        $this->desc = $desc;
    }



    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of isHidden
     */ 
    public function getIsHidden()
    {
        return $this->isHidden;
    }

    /**
     * Get the value of desc
     */ 
    public function getDesc()
    {
        return $this->desc;
    }
}