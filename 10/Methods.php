<?php

spl_autoload_register(function ($className) {
    include $className . ".php";
});

class Methods{
    public function method_first(){
        $random = rand(0,1);
        switch ($random){
            case 0:
                throw new \exc\firstException();
            case 1:
                throw new \exc\secondException();
        }
    }
    public function method_second(){
        $random = rand(0,1);
        switch ($random){
            case 0:
                throw new \exc\secondException();
            case 1 :
                throw new \exc\thirdException();
        }
    }
    public function method_third(){
        $random = rand(0,1);
        switch ($random){
            case 0:
                throw new \exc\thirdException();
            case 1:
                throw new \exc\fourException();
        }
    }
    public function method_four(){
        $random = rand(0, 1);
        switch ($random) {
            case 0:
                throw new \exc\fourException();
            case 1:
                throw new \exc\fiveException();
        }
    }
}