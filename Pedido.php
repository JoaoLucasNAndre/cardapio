<?php

    class Pedido {
        private string $nomeCliente;
        private string $nomeGarcom;
        private Prato $prato;

        public function __toString()
        {
            $dados = "O cliente" . $this->nomeCliente . ", foi atendido pelo garçom " . $this->nomeGarcom . ", pediu um prato de " . $this->prato . " no valor de R$ <valorPrato>";
            return $dados;
        }
        

        /**
         * Get the value of nomeCliente
         */
        public function getNomeCliente(): string
        {
                return $this->nomeCliente;
        }

        /**
         * Set the value of nomeCliente
         */
        public function setNomeCliente(string $nomeCliente): self
        {
                $this->nomeCliente = $nomeCliente;

                return $this;
        }

        /**
         * Get the value of nomeGarcom
         */
        public function getNomeGarcom(): string
        {
                return $this->nomeGarcom;
        }

        /**
         * Set the value of nomeGarcom
         */
        public function setNomeGarcom(string $nomeGarcom): self
        {
                $this->nomeGarcom = $nomeGarcom;

                return $this;
        }

        /**
         * Get the value of Prato
         */
        public function getPrato(): prato
        {
                return $this->prato;
        }

        /**
         * Set the value of Prato
         */
        public function setPrato(prato $Prato): self
        {
                $this->prato = $Prato;

                return $this;
        }
    }
