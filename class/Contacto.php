<?php

class Contacto 
{
    private ?int $id_contacto = null;
    private ?string $mail = null;
    private ?string $telefono = null;
    private ?string $twitter = null;
    private ?string $instagram = null;
    private ?string $facebook = null;
    private ?string $linkedin = null;
    private ?string $descripcion = null;

    /**
     * Get the value of id_contacto
     *
     * @return  ?int
     */
    public function getIdContacto():?int
    {
        return $this->id_contacto;
    }

    /**
     * Set the value of id_contacto
     *
     * @param  int  $id_contacto
     *
     * @return  void
     */
    public function setIdContacto(int $id_contacto)
    {
        $this->id_contacto = $id_contacto;
    }

    

    /**
     * Get the value of mail
     *
     * @return  string | null
     */
    public function getMail():?string
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @param  string | null  $mail
     *
     * @return  self
     */
    public function setMail(?string $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get the value of telefono
     *
     * @return  string | null
     */
    public function getTelefono():?string
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @param  string | null  $telefono
     *
     * @return  self
     */
    public function setTelefono(?string $telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get the value of twitter
     *
     * @return  string | null
     */
    public function getTwitter():?string
    {
        return $this->twitter;
    }

    /**
     * Set the value of twitter
     *
     * @param  string | null  $twitter
     *
     * @return  self
     */
    public function setTwitter(?string $twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * Get the value of instagram
     *
     * @return  string | null
     */
    public function getInstagram():?string
    {
        return $this->instagram;
    }

    /**
     * Set the value of instagram
     *
     * @param  string | null  $instagram
     *
     * @return  void
     */
    public function setInstagram(?string $instagram)
    {
        $this->instagram = $instagram;
    }

    /**
     * Get the value of facebook
     *
     * @return  string | null
     */
    public function getFacebook():?string
    {
        return $this->facebook;
    }

    /**
     * Set the value of facebook
     *
     * @param  string | null  $facebook
     *
     * @return  void
     */
    public function setFacebook(?string $facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * Get the value of linkedin
     *
     * @return  string | null
     */
    public function getLinkedin():?string
    {
        return $this->linkedin;
    }

    /**
     * Set the value of linkedin
     *
     * @param  string | null  $linkedin
     *
     * @return  void
     */
    public function setLinkedin(?string $linkedin)
    {
        $this->linkedin = $linkedin;
    }

    /**
     * Get the value of descripcion
     *
     * @return  string | null
     */
    public function getDescripcion():?string
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @param  string | null  $descripcion
     *
     * @return  void
     */
    public function setDescripcion(?string $descripcion)
    {
        $this->descripcion = $descripcion;
    }
}