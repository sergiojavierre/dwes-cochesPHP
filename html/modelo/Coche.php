<?

class Coche
{
    public $matricula;
    public $modelo;

    public function __construct($matricula = "", $modelo = "")
    {
        $this->matricula = $matricula;
        $this->modelo = $modelo;
    }
}
