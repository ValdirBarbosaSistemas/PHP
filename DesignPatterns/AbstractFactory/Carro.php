<?php

class Carro
{
    private Roda $roda;
    private Som $som;

    public function __construct()
    {
    }

    /**
     * @return Roda
     */
    public function getRoda(): Roda
    {
        return $this->roda;
    }

    /**
     * @param Roda $roda
     */
    public function setRoda(Roda $roda): void
    {
        $this->roda = $roda;
    }

    /**
     * @return Som
     */
    public function getSom(): Som
    {
        return $this->som;
    }

    /**
     * @param Som $som
     */
    public function setSom(Som $som): void
    {
        $this->som = $som;
    }


}