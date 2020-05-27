<?php


namespace Crawly\InscricaoEstadualLaravel;

use Illuminate\Validation\Validator as BaseValidator;
use Thiagocfn\InscricaoEstadual\Util\Estados;
use Thiagocfn\InscricaoEstadual\Util\Validador;

/**
 * @SuppressWarnings("PHPMD.TooManyMethods")
 * @SuppressWarnings("PHPMD.TooManyPublicMethods")
 */
class Validator extends BaseValidator
{
    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualAc($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::AC, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualAl($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::AL, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualAp($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::AP, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualAm($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::AM, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualBa($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::BA, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualCe($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::CE, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualDf($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::DF, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualEs($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::ES, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualGo($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::GO, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualMa($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::MA, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualMt($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::MT, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualMs($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::MS, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualMg($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::MG, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualPa($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::PA, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualPb($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::PB, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualPr($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::PR, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualPe($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::PE, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualPi($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::PI, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualRj($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::RJ, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualRn($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::RN, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualRs($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::RS, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualRo($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::RO, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualRr($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::RR, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualSc($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::SC, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualSp($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::SP, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualSe($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::SE, $inscricaoEstadual);
    }

    /**
     * @SuppressWarnings("PHPMD.UnusedFormalParameter")
     */
    public function validateInscricaoEstadualTo($attribute, $value): bool
    {
        $inscricaoEstadual = $this->sanitize($value);

        return Validador::check(Estados::TO, $inscricaoEstadual);
    }

    protected function sanitize(string $value): string
    {
        return preg_replace('/[^\d]/', '', $value);
    }
}
