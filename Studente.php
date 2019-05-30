<?php
/**
 * Classe di esempio
 * @author Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 */
declare(strict_types=1);

class Studente implements CorsiInterface , StudenteInterface {
    public $nome;
    public $cognome;
    public $email;
    public $dataDiNascita;
    protected $corsi = [];

    public function addCorso(string $corso): void
    {
        if (!isset($this->corsi[$corso])) {
            $this->corsi[$corso] = 0;
        }
    }

    public function addVotoEsame(string $corso, int $voto): void
    {
        if (isset($this->corsi[$corso])) {
            $this->corsi[$corso] = $voto;
        }
    }

    public function getMediaEsami(): ?float
    {
        if (empty($this->corsi)) {
            return null;
        }
        return array_sum($this->corsi) / count($this->corsi);
    }

    public function getMediaCorsi(): float
    {
        // TODO: Implement getMediaCorsi() method.
    }

    public function getCorsi(): array
    {
        // TODO: Implement getCorsi() method.
    }

    public function addVoto(string $corso, int $voto): bool
    {


    }

    public function setNome(string $nome): bool
    {
        // TODO: Implement setNome() method.
    }

    public function getNome(): string
    {
        // TODO: Implement getNome() method.
    }

    public function setCognome(string $cognome): bool
    {
        // TODO: Implement setCognome() method.
    }

    public function getCognome(): string
    {
        // TODO: Implement getCognome() method.
    }

    public function setEmail(string $email): bool
    {
        // TODO: Implement setEmail() method.
    }

    public function getEmail(): string
    {
        // TODO: Implement getEmail() method.
    }

    public function setDataDiNascita(int $giorno, int $mese, int $anno): bool
    {
        // TODO: Implement setDataDiNascita() method.
    }

    public function getDataDiNascita(): string
    {
        // TODO: Implement getDataDiNascita() method.
    }


