<?php

    class Prato {
        private int $numero;
        private string $nome;
        private float $valor;

        public function __construct(int $numero, string $nome, float $valor) {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->valor = $valor;
        
        }

    public function __toString()
    {
        $dados1 = $this->nome . " no valor de R$" . $this->valor . "\n";
        return $dados1;
    }




        /**
         * Get the value of numero
         */
        public function getNumero(): int
        {
                return $this->numero;
        }

        /**
         * Set the value of numero
         */
        public function setNumero(int $numero): self
        {
                $this->numero = $numero;

                return $this;
        }

        /**
         * Get the value of nome
         */
        public function getNome(): string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */
        public function setNome(string $nome): self
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of valor
         */
        public function getValor(): float
        {
                return $this->valor;
        }

        /**
         * Set the value of valor
         */
        public function setValor(float $valor): self
        {
                $this->valor = $valor;

                return $this;
        }
    }
