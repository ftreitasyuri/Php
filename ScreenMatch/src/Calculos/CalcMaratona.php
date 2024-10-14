<?php 

namespace ScreenMatch\Calculos;

use ScreenMatch\Modelo\Titulo;

class calcMaratona{

    private int $duracaoMaratona = 0;

    public function inclui(Titulo $titulo): void{
        $this->duracaoMaratona += $titulo->duracaoMinutos();    
    }

    public function duracao(): int{
        return $this->duracaoMaratona;
    }
}

?>