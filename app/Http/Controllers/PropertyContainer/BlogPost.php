<?php

namespace App\Http\Controllers\PropertyContainer;

class BlogPost
{
    /**
     * @var PropertyContainerInterface
     */
    public PropertyContainerInterface $container;
    /**
     * @var string
     */
    private string $body;
    /**
     * @var string
     */
    private string $header;

    /**
     * @param PropertyContainerInterface $container
     * @param string $body
     * @param string $header
     */
    public function __construct(PropertyContainerInterface $container,
                                string                     $body = 'body',
                                string                     $header = 'header')
    {
        $this->container = $container;
        $this->setBody($body);
        $this->setHeader($header);
    }


    /**
     * @param $body string
     * @return void
     */
    public function setBody(string $body)
    {
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param $header string
     * @return void
     */
    public function setHeader(string $header)
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @return PropertyContainerInterface
     */
    public function getContainer(): PropertyContainerInterface
    {
        return $this->container;
    }
}
