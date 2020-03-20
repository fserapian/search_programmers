<?php

class Template
{
    // path to template
    protected $template;

    // variables passed in
    protected $vars = [];

    // constructor
    public function __construct($template)
    {
        $this->template = $template;
    }

    // getter and setter magic functions
    public function __get($key)
    {
        return $this->vars[$key];
    }

    public function __set($key, $value)
    {
        $this->vars[$key] = $value;
    }

    // toString magic function
    public function __toString()
    {
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }
}
