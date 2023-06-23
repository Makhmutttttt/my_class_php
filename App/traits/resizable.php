<?php
namespace App\traits;

trait Resizable {
    public function resize(float $scale) {
        $this->width *= $scale;
        $this->height *= $scale;
    }
}

?>