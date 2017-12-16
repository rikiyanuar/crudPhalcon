<?php

class Pegawai extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=9, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=true)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $ttl;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=true)
     */
    public $jkel;

    /**
     *
     * @var string
     * @Column(type="string", length=30, nullable=true)
     */
    public $alamat;

    /**
     *
     * @var string
     * @Column(type="string", length=12, nullable=true)
     */
    public $nohp;

    /**
     *
     * @var integer
     * @Column(type="integer", length=12, nullable=true)
     */
    public $gaji;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("crudPhalcon");
        $this->setSource("pegawai");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'pegawai';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pegawai[]|Pegawai|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Pegawai|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
