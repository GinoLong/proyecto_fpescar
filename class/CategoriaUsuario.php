<?php

class CategoriaUsuario
{
    private ?int $id_cat_usuario = null;
    private ?string $nombre = null;
    private ?string $descripcion = null;

    

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
     * @param  string  $nombre
     * @return void
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
    }
    

    /**
     * Get the value of descripcion
     *
     * @return  string
     */
    public function getDescripcion():?string
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @param  ?string  $descripcion
     * @return void
     */
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }
}