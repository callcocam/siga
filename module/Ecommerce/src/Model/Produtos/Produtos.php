<?php
/**
 * @license © 2005 - 2016 by Zend Technologies Ltd. All rights reserved.
 */


namespace Ecommerce\Model\Produtos;

use Base\Model\AbstractModel;

/**
 * SIGA-Smart
 *
 * Esta class foi gerada via Zend\Code\Generator.
 */
class Produtos extends AbstractModel
{

    protected $tipo = null;

    protected $title = null;

    protected $subtitle = null;

    protected $images = null;

    protected $catid = null;

    protected $marca = null;

    protected $unidade = null;

    protected $pago = null;

    protected $lucro = '0.00';

    protected $valor = '0.00';

    protected $peso = null;

    protected $altura = null;

    protected $lagura = null;

    protected $estoque = '00000';

    protected $minimo = null;

    /**
     * get tipo
     *
     * @return int
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * get title
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * get subtitle
     *
     * @return varchar
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }

    /**
     * get images
     *
     * @return varchar
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * get catid
     *
     * @return int
     */
    public function getCatid()
    {
        return $this->catid;
    }

    /**
     * get marca
     *
     * @return varchar
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * get unidade
     *
     * @return varchar
     */
    public function getUnidade()
    {
        return $this->unidade;
    }

    /**
     * get pago
     *
     * @return double
     */
    public function getPago()
    {
        return $this->pago;
    }

    /**
     * get lucro
     *
     * @return double
     */
    public function getLucro()
    {
        return $this->lucro;
    }

    /**
     * get valor
     *
     * @return double
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * get peso
     *
     * @return varchar
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * get altura
     *
     * @return varchar
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * get lagura
     *
     * @return varchar
     */
    public function getLagura()
    {
        return $this->lagura;
    }

    /**
     * get estoque
     *
     * @return int
     */
    public function getEstoque()
    {
        return $this->estoque;
    }

    /**
     * get minimo
     *
     * @return int
     */
    public function getMinimo()
    {
        return $this->minimo;
    }

    /**
     * set tipo
     *
     * @return int
     */
    public function setTipo($tipo = null)
    {
        $this->tipo=$tipo;
        return $this;
    }

    /**
     * set title
     *
     * @return varchar
     */
    public function setTitle($title = null)
    {
        $this->title=$title;
        return $this;
    }

    /**
     * set subtitle
     *
     * @return varchar
     */
    public function setSubtitle($subtitle = null)
    {
        $this->subtitle=$subtitle;
        return $this;
    }

    /**
     * set images
     *
     * @return varchar
     */
    public function setImages($images = null)
    {
        $this->images=$images;
        return $this;
    }

    /**
     * set catid
     *
     * @return int
     */
    public function setCatid($catid = null)
    {
        $this->catid=$catid;
        return $this;
    }

    /**
     * set marca
     *
     * @return varchar
     */
    public function setMarca($marca = null)
    {
        $this->marca=$marca;
        return $this;
    }

    /**
     * set unidade
     *
     * @return varchar
     */
    public function setUnidade($unidade = null)
    {
        $this->unidade=$unidade;
        return $this;
    }

    /**
     * set pago
     *
     * @return double
     */
    public function setPago($pago = null)
    {
        $this->pago=$pago;
        return $this;
    }

    /**
     * set lucro
     *
     * @return double
     */
    public function setLucro($lucro = '0.00')
    {
        $this->lucro=$lucro;
        return $this;
    }

    /**
     * set valor
     *
     * @return double
     */
    public function setValor($valor = '0.00')
    {
        $this->valor=$valor;
        return $this;
    }

    /**
     * set peso
     *
     * @return varchar
     */
    public function setPeso($peso = null)
    {
        $this->peso=$peso;
        return $this;
    }

    /**
     * set altura
     *
     * @return varchar
     */
    public function setAltura($altura = null)
    {
        $this->altura=$altura;
        return $this;
    }

    /**
     * set lagura
     *
     * @return varchar
     */
    public function setLagura($lagura = null)
    {
        $this->lagura=$lagura;
        return $this;
    }

    /**
     * set estoque
     *
     * @return int
     */
    public function setEstoque($estoque = '00000')
    {
        $this->estoque=$estoque;
        return $this;
    }

    /**
     * set minimo
     *
     * @return int
     */
    public function setMinimo($minimo = null)
    {
        $this->minimo=$minimo;
        return $this;
    }


}