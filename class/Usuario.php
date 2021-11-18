<?php

Class Usuario
{
    private ?int $id_usuario = null;
    private ?string $usuario = null;
    private ?string $contrasena = null;
    private ?string $nombre = null;
    private ?string $apellido = null;
    private ?string $direccion = null;
    private ?string $telefono = null;
    private ?string $mail = null;
    private ?int $calificacion = null;
    private ?string $fecha_creacion = null;
    private ?string $fecha_modificacion = null;
    private ?int $id_cat_usuario = null;

    /**
     * Get the value of id_usuario
     *
     * @return  int
     */
    public function getIdUsuario():?int
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @param  int  $id_usuario
     * @return void
     */
    public function setIdUsuario(int $id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }

    /**
     * Get the value of usuario
     *
     * @return  string
     */
    public function getUsuario():?string
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @param  string  $usuario
     * @return void
     */
    public function setUsuario(string $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get the value of contrasena
     *
     * @return  string
     */
    public function getContrasena():?string
    {
        return $this->contrasena;
    }

    /**
     * Set the value of contrasena
     *
     * @param  string  $contrasena
     * @return void
     */
    public function setContrasena(string $contrasena)
    {
        $this->contrasena = $contrasena;
    }

    /**
     * Get the value of nombre
     *
     * @return  string
     */
    public function getNombre():?string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param  ?string  $nombre
     * @return void
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of apellido
     *
     * @return  string
     */
    public function getApellido():?string
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @param  string  $apellido
     * @return void
     */
    public function setApellido(string $apellido)
    {
        $this->apellido = $apellido;

    }

    /**
     * Get the value of direccion
     *
     * @return  string
     */
    public function getDireccion():?string
    {
        return $this->direccion;
    }

    /**
     * Set the value of direccion
     *
     * @param  string  $direccion
     * @return void
     */
    public function setDireccion(?string $direccion) // puede ser null
    {
        $this->direccion = $direccion;
    }

    /**
     * Get the value of telefono
     *
     * @return  string
     */
    public function getTelefono():?string
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @param  string  $telefono
     * @return void
     */
    public function setTelefono(?string $telefono) // puede ser null
    {
        $this->telefono = $telefono;
    }
    

    /**
     * Get the value of mail
     *
     * @return  string
     */
    public function getMail():?string
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @param  string  $mail
     * @return void
     */
    public function setMail(string $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get the value of calificacion
     *
     * @return  int
     */
    public function getCalificacion():?int
    {
        return $this->calificacion;
    }

    /**
     * Set the value of calificacion
     *
     * @param  int  $calificacion
     * @return void
     */
    public function setCalificacion(?int $calificacion) // puede ser null
    {
        $this->calificacion = $calificacion;
    }

    /**
     * Get the value of fecha_creacion
     *
     * @return  string
     */
    public function getFechaCreacion():?string
    {
        return $this->fecha_creacion;
    }

    /**
     * Set the value of fecha_creacion
     *
     * @param  string  $fecha_creacion
     * @return void
     */
    public function setFechaCreacion(string $fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    /**
     * Get the value of fecha_modificacion
     *
     * @return  string
     */
    public function getFechaModificacion():?string
    {
        return $this->fecha_modificacion;
    }

    /**
     * Set the value of fecha_modificacion
     *
     * @param  string  $fecha_modificacion
     * @return void
     */
    public function setFechaModificacion(?string $fecha_modificacion) //puede ser null
    {
        $this->fecha_modificacion = $fecha_modificacion;
    }

    /**
     * Get the value of id_cat_usuario
     *
     * @return  int
     */
    public function getIdCatUsuario():?int
    {
        return $this->id_cat_usuario;
    }

    /**
     * Set the value of id_cat_usuario
     *
     * @param  int  $id_cat_usuario
     * @return void
     */
    public function setIdCatUsuario(int $id_cat_usuario)
    {
        $this->id_cat_usuario = $id_cat_usuario;
    }
}