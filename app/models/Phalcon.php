<?php

class Phalcon extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $nim;

    /**
     *
     * @var string
     */
    public $nama;
 
    public $id_jurusan;
    public $alamat;



    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'phalcon';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return RefUser[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return RefUser
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
