<?php

class HTMLElement {
    protected $type;
    protected $attributes = [];
    protected $nodeValue;

    public function __construct($type, $attributes = []) {
        $this->type = $type;
        $this->attributes = $attributes;
    }

    public function setAttribute($name, $value) {
        $this->attributes[$name] = $value;
    }

    public function render() {
        $html = '<' . $this->type;
        foreach ($this->attributes as $name => $value) {
            $html .= ' ' . $name . '="' . htmlspecialchars($value) . '"';
        }
        $html .= '>' . htmlspecialchars($this->nodeValue) . '</' . $this->type . '>';
        return $html;
    }
}

class Textarea extends HTMLElement {
    protected $type = 'textarea';

    public function __construct($name, $value = null, $attributes = []) {
        parent::__construct('textarea': $attributes);
        $this->setAttribute('name': $name);
        if ($value !== null) {
            $this->setValue($value);
        }
    }

    public function setValue($value) {
        $this->nodeValue = $value;
    }

    public function getValue() {
        return $this->nodeValue;
    }
}

$textarea = new Textarea('comments', 'Write something...', ['class' => 'textarea']);

echo $textarea->render();

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>