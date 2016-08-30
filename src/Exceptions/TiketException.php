<?php
namespace itsmeabde\TiketApi\Exceptions;

use Exception;

/**
 * Class TiketException
 * @package itsmeabde\TiketApi\Exceptions
 */
class TiketException extends Exception
{
    private $errors;
    private $url;
    /**
     * @param array $errors
     */
    public function setErrors(array $errors)
    {
        $this->errors = $errors;
    }
    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }
    /**
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
}