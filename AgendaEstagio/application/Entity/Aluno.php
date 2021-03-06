<?php

namespace AgendaEstagio\application\Entity;
/**
 * 
 * @Entity
 *
 */
class Aluno
{
    /**
     * 
     * @Id
     * @Column(type="integer")
     */
    private $matricula;
    /**
     *
     * @Id
     * @Column(type="integer")
     */
    private $ano;
    /**
     *
     * @Id
     * @Column(type="integer")
     */
    private $semestre;
    public function getMatricula():string
    {
        return $this->matricula;
    }

    public function setMatricula($matricula):self
    {
        $this->matricula = $matricula;
        return $this;
    }

    public function getAno():string
    {
        return $this->ano;
    }

    public function setAno($ano):self
    {
        $this->ano = $ano;
        return $this;
    }

    public function getSemestre():string
    {
        return $this->semestre;
        
    }

    public function setSemestre($semestre):self
    {
        $this->semestre = $semestre;
        return $this;
    }

    
}

