<?php

class Publicacion
{
    private ?int $id_usuario = null;
    private ?int $id_publicacion = null;
    private ?int $id_contacto = null;
    private ?int $id_categoria_trabajo = null;
    private ?string $titulo = null;
    private ?string $ubicacion = null;
    private ?string $descripcion = null;
    private ?string $precio = null;
    private ?int $metodo_pago = null;
    private ?string $fecha_creacion = null;
    private ?string $fecha_modificacion = null;
    private ?string $fecha_eliminacion = null;

    

    /**
     * Get the value of id_usuario
     *
     * @return int 
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
     * Get the value of id_publicacion
     * @return  int
     */
    public function getIdPublicacion():?int
    {
        return $this->id_publicacion;
    }

    /**
     * Set the value of id_publicacion
     *
     * @param  int  $id_publicacion
     * @return  void
     */
    public function setIdPublicacion(int $id_publicacion)
    {
        $this->id_publicacion = $id_publicacion;
    }
    

    /**
     * Get the value of id_contacto
     *
     * @return  int
     */
    public function getIdContacto():?int
    {
        return $this->id_contacto;
    }

    /**
     * Set the value of id_contacto
     *
     * @param  int  $id_contacto
     * @return  void
     */
    public function setIdContacto(int $id_contacto)
    {
        $this->id_contacto = $id_contacto;
    }
    

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
     * @return  void
     */
    public function setIdCategoriaTrabajo(int $id_categoria_trabajo)
    {
        $this->id_categoria_trabajo = $id_categoria_trabajo;
    }


    /**
     * Get the value of titulo
     *
     * @return  string
     */
    public function getTitulo():?string
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @param  string  $titulo
     *
     * @return  void
     */
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Get the value of ubicacion
     *
     * @return  string
     */
    public function getUbicacion():?string
    {
        return $this->ubicacion;
    }

    /**
     * Set the value of ubicacion
     *
     * @param  string  $ubicacion
     *
     * @return  void
     */
    public function setUbicacion(string $ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }

    /**
     * Get the value of descripcion
     *
     * @return  ?string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     *
     * @param  string  $descripcion
     *
     * @return  void
     */
    public function setDescripcion(string $descripcion)
    {
        $this->descripcion = $descripcion;
    }
    

    /**
     * Get the value of precio
     *
     * @return  string | null
     */
    public function getPrecio():?string
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @param  string | null  $precio
     *
     * @return  void
     */
    public function setPrecio(?string $precio)
    {
        $this->precio = $precio;
    }

    /**
     * Get the value of metodo_pago
     *
     * @return  int | null
     */
    public function getMetodoPago()
    {
        return $this->metodo_pago;
    }

    /**
     * Set the value of metodo_pago
     *
     * @param  int | null $metodo_pago
     *
     * @return  void
     */
    public function setMetodoPago(?int $metodo_pago)
    {
        $this->metodo_pago = $metodo_pago;
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
     *
     * @return  void
     */
    public function setFechaCreacion(string $fecha_creacion)
    {
        $this->fecha_creacion = $fecha_creacion;
    }

    /**
     * Get the value of fecha_modificacion
     *
     * @return  string | null
     */
    public function getFechaModificacion():?string
    {
        return $this->fecha_modificacion;
    }

    /**
     * Set the value of fecha_modificacion
     *
     * @param  string | null  $fecha_modificacion
     *
     * @return  void
     */
    public function setFechaModificacion(?string $fecha_modificacion)
    {
        $this->fecha_modificacion = $fecha_modificacion;
    }

    /**
     * Get the value of fecha_eliminacion
     *
     * @return  string | null
     */
    public function getFechaEliminacion():?string
    {
        return $this->fecha_eliminacion;
    }

    /**
     * Set the value of fecha_eliminacion
     *
     * @param  string | null  $fecha_eliminacion
     *
     * @return  void
     */
    public function setFechaEliminacion(?string $fecha_eliminacion)
    {
        $this->fecha_eliminacion = $fecha_eliminacion;
    }
}