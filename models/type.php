<?php


class Type
{
    private string $name;
    private string $link;

    /**
     * Pokemon constructor.
     * @param string $name
     * @param string $link
     */
    public function __construct(string $name, string $link)
    {
        $this->name = $name;
        $this->link = $link;
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of link
     */ 
    public function getLink()
    {
        return $this->link;
    }
}