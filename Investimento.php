<?php

interface Investimento {
        public function calcula(Conta $conta);
      }

      class Conservador implements Investimento{
        public function calcula(Conta $conta) {
          return $conta->getSaldo() * 0.008;
        } 
      }

      class Moderado implements Investimento {
        private $random;

        public function calcula(Conta $conta) {
          $this->random = mt_rand(1,100);
          if($this->random >= 50) return $conta->getSaldo() * 0.025;
          else return $conta->getSaldo() * 0.007;
        }
      }

      class Arrojado implements Investimento {
        private $random;

        public function calcula(Conta $conta) {
          $this->random = mt_rand(1,100);
          if($this->random >= 1 && $this->random <= 20) return $conta->getSaldo() * 0.05;
          else if ($this->random > 20 && $this->random <= 50) return $conta->getSaldo() * 0.03;
          else return $conta->getSaldo() * 0.006;
        }
      }
      ?>

