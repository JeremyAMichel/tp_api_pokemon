<?php


class Pokemon
{
    private string $name;

    private string $logo;

    private string $imgOff;

    private int $order;

    private array $types;

    /**
     * Item constructor.
     * @param string $name
     * @param string $logo
     * @param string $imgOff
     * @param int $order
     * @param array $types
     */
    public function __construct(string $name, string $logo, string $imgOff, int $order, array $types)
    {
        $this->name = $name;
        $this->logo = $logo;
        $this->imgOff = $imgOff;
        $this->order = $order;
        $this->types = $types;
    }


    /**
     * Get the value of types
     */ 
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Get the value of order
     */ 
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Get the value of imgOff
     */ 
    public function getImgOff()
    {
        return $this->imgOff;
    }

    /**
     * Get the value of logo
     */ 
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }
}