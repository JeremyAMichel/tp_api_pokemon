<?php


class Pokemon
{
    private string $name;

    private string $logo;

    private string $imgOff;

    private int $order;

    private array $types;

    private int $id;

    private array $stats;

    private float $weight;

    private float $height;

    private array $abilities;

    // private string $description;

    /**
     * Item constructor.
     * @param string $name
     * @param string $logo
     * @param string $imgOff
     * @param int $order
     * @param array $types
     * @param array $stats
     * @param float $weight
     * @param float $height
     * @param array $abilities
     * @param string $description
     */
    public function __construct(string $name, string $logo, 
    string $imgOff, int $order, array $types, int $i, array $stats, float $weight, float $height,
    array $abilities
    // string $description
    )
    {
        $this->name = $name;
        $this->logo = $logo;
        $this->imgOff = $imgOff;
        $this->order = $order;
        $this->types = $types;
        $this->id = $i;
        $this->stats = $stats;
        $this->weight = $weight;
        $this->height = $height;
        $this->abilities = $abilities;
        // $this->description = $description;
    }

    /**
     * Get the value of types
     */ 
    public function getId()
    {
        return $this->id;
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

    /**
     * Get the value of stats
     */ 
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Get the value of abilities
     */ 
    public function getAbilities()
    {
        return $this->abilities;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }
}