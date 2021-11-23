<?php

class CategoriaTrabajo
{
    private ?int $id_categoria_trabajo = null;
    private ?string $nombre = null;
    private ?string $descripcion = null;

    

    /**
     * Get the value of id_categoria_trabajo
     *
     * @return  int
     */
    public function getIdCategoriaTrabajo():?int
    {
        return $this->id_categoria_trabajo;
    }

    /**
     * Set the value of id_categoria_trabajo
     *
     * @param  int  $id_categoria_trabajo
     *
     * @return  void
     */
    public function setIdCategoriaTrabajo(int $id_categoria_trabajo)
    {
        $this->id_categoria_trabajo = $id_categoria_trabajo;
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
     *
     * @return  void
     */
    public function setNombre(string $nombre)
    {
        $this->nombre = $nombre;
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