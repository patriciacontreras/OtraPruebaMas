<?php

namespace Tipddy\UPVBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipddy\UPVBundle\Entity\Inscripcion
 *
 * @ORM\Table(name="inscripcion")
 * @ORM\Entity
 */
class Inscripcion
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $apellidos
     *
     * @ORM\Column(name="apellidos", type="string", length=20, nullable=true)
     */
    private $apellidos;

    /**
     * @var string $rut
     *
     * @ORM\Column(name="rut", type="string", length=10, nullable=true)
     */
    private $rut;

    /**
     * @var date $fechaNacimiento
     *
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @var string $sexo
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string $emailPersonal
     *
     * @ORM\Column(name="email_personal", type="string", length=20, nullable=true)
     */
    private $emailPersonal;

    /**
     * @var string $emailIntitucional
     *
     * @ORM\Column(name="email_intitucional", type="string", length=20, nullable=true)
     */
    private $emailIntitucional;

    /**
     * @var string $fonoFijo
     *
     * @ORM\Column(name="fono_fijo", type="string", length=10, nullable=true)
     */
    private $fonoFijo;

    /**
     * @var string $fonoMovil
     *
     * @ORM\Column(name="fono_movil", type="string", length=10, nullable=true)
     */
    private $fonoMovil;

    /**
     * @var string $sede
     *
     * @ORM\Column(name="sede", type="string", length=20, nullable=true)
     */
    private $sede;

    /**
     * @var string $facultad
     *
     * @ORM\Column(name="facultad", type="string", length=20, nullable=true)
     */
    private $facultad;

    /**
     * @var string $carrera
     *
     * @ORM\Column(name="carrera", type="string", length=20, nullable=true)
     */
    private $carrera;

    /**
     * @var string $tituloProfesional
     *
     * @ORM\Column(name="titulo_profesional", type="string", length=20, nullable=true)
     */
    private $tituloProfesional;

    /**
     * @var string $gradoAcademico
     *
     * @ORM\Column(name="grado_academico", type="string", length=20, nullable=true)
     */
    private $gradoAcademico;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set rut
     *
     * @param string $rut
     */
    public function setRut($rut)
    {
        $this->rut = $rut;
    }

    /**
     * Get rut
     *
     * @return string 
     */
    public function getRut()
    {
        return $this->rut;
    }

    /**
     * Set fechaNacimiento
     *
     * @param date $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * Get fechaNacimiento
     *
     * @return date 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set emailPersonal
     *
     * @param string $emailPersonal
     */
    public function setEmailPersonal($emailPersonal)
    {
        $this->emailPersonal = $emailPersonal;
    }

    /**
     * Get emailPersonal
     *
     * @return string 
     */
    public function getEmailPersonal()
    {
        return $this->emailPersonal;
    }

    /**
     * Set emailIntitucional
     *
     * @param string $emailIntitucional
     */
    public function setEmailIntitucional($emailIntitucional)
    {
        $this->emailIntitucional = $emailIntitucional;
    }

    /**
     * Get emailIntitucional
     *
     * @return string 
     */
    public function getEmailIntitucional()
    {
        return $this->emailIntitucional;
    }

    /**
     * Set fonoFijo
     *
     * @param string $fonoFijo
     */
    public function setFonoFijo($fonoFijo)
    {
        $this->fonoFijo = $fonoFijo;
    }

    /**
     * Get fonoFijo
     *
     * @return string 
     */
    public function getFonoFijo()
    {
        return $this->fonoFijo;
    }

    /**
     * Set fonoMovil
     *
     * @param string $fonoMovil
     */
    public function setFonoMovil($fonoMovil)
    {
        $this->fonoMovil = $fonoMovil;
    }

    /**
     * Get fonoMovil
     *
     * @return string 
     */
    public function getFonoMovil()
    {
        return $this->fonoMovil;
    }

    /**
     * Set sede
     *
     * @param string $sede
     */
    public function setSede($sede)
    {
        $this->sede = $sede;
    }

    /**
     * Get sede
     *
     * @return string 
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Set facultad
     *
     * @param string $facultad
     */
    public function setFacultad($facultad)
    {
        $this->facultad = $facultad;
    }

    /**
     * Get facultad
     *
     * @return string 
     */
    public function getFacultad()
    {
        return $this->facultad;
    }

    /**
     * Set carrera
     *
     * @param string $carrera
     */
    public function setCarrera($carrera)
    {
        $this->carrera = $carrera;
    }

    /**
     * Get carrera
     *
     * @return string 
     */
    public function getCarrera()
    {
        return $this->carrera;
    }

    /**
     * Set tituloProfesional
     *
     * @param string $tituloProfesional
     */
    public function setTituloProfesional($tituloProfesional)
    {
        $this->tituloProfesional = $tituloProfesional;
    }

    /**
     * Get tituloProfesional
     *
     * @return string 
     */
    public function getTituloProfesional()
    {
        return $this->tituloProfesional;
    }

    /**
     * Set gradoAcademico
     *
     * @param string $gradoAcademico
     */
    public function setGradoAcademico($gradoAcademico)
    {
        $this->gradoAcademico = $gradoAcademico;
    }

    /**
     * Get gradoAcademico
     *
     * @return string 
     */
    public function getGradoAcademico()
    {
        return $this->gradoAcademico;
    }
}