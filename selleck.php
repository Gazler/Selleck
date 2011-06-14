<?php
require 'mustache.php';
class Selleck extends Mustache
{
    private $_directory = "templates/";
    private $_loaded = array();

    public function render($template, $data)
    {
        return parent::render($this->load($template), $data);
    }

    public function js_template($template, $id)
    {
        return '<script type="text/html" id="'.$id.'">'."\n".$this->load($template).'</script>'."\n";
    }

    private function load($template)
    {
        if (!array_key_exists($template, $this->_loaded))
        {
            $this->_loaded[$template] = file_get_contents($this->_directory.$template.".mustache");
        }
        return $this->_loaded[$template];
    }
}

