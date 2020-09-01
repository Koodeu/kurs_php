<?php


abstract class Renderer{

protected $tekst;

public function __construct($tekst)
{
    $this->tekst = $tekst;
}

    public abstract function render(): string;  

    public function text(): string{
    return $this->text;
    }


}

class HtmlRenderer extends Renderer{

public function render(): string{
    return '<html><head></head><body>'.
    $this->text.'</body><html>';
} 

}

class JsonRenderer extends Renderer{
public function render(): string
{
    return json_encode($this->text);
}

}


$html = "tekst jako HTML"; 


$htmlRenderer = new HtmlRenderer($html);

$htmlRenderer->render();