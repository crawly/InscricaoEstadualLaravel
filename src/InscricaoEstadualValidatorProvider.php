<?php

namespace Crawly\InscricaoEstadualLaravel;

use Illuminate\Support\ServiceProvider;

class InscricaoEstadualValidatorProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        $className = '\\Crawly\\InscricaoEstadualLaravel\\Validator';

        $this->app->validator->extend('inscricao_estadual_ac', "{$className}@validateInscricaoEstadualAc", $this->defaultMessage('acre'));
        $this->app->validator->extend('inscricao_estadual_al', "{$className}@validateInscricaoEstadualAl", $this->defaultMessage('alagoas'));
        $this->app->validator->extend('inscricao_estadual_ap', "{$className}@validateInscricaoEstadualAp", $this->defaultMessage('amapa'));
        $this->app->validator->extend('inscricao_estadual_am', "{$className}@validateInscricaoEstadualAm", $this->defaultMessage('amazonas'));
        $this->app->validator->extend('inscricao_estadual_ba', "{$className}@validateInscricaoEstadualBa", $this->defaultMessage('bahia'));
        $this->app->validator->extend('inscricao_estadual_ce', "{$className}@validateInscricaoEstadualCe", $this->defaultMessage('ceará'));
        $this->app->validator->extend('inscricao_estadual_df', "{$className}@validateInscricaoEstadualDf", $this->defaultMessage('distrito federal'));
        $this->app->validator->extend('inscricao_estadual_es', "{$className}@validateInscricaoEstadualEs", $this->defaultMessage('espirito santo'));
        $this->app->validator->extend('inscricao_estadual_go', "{$className}@validateInscricaoEstadualGo", $this->defaultMessage('goiás'));
        $this->app->validator->extend('inscricao_estadual_ma', "{$className}@validateInscricaoEstadualMa", $this->defaultMessage('maranhao'));
        $this->app->validator->extend('inscricao_estadual_mt', "{$className}@validateInscricaoEstadualMt", $this->defaultMessage('mato grosso'));
        $this->app->validator->extend('inscricao_estadual_ms', "{$className}@validateInscricaoEstadualMs", $this->defaultMessage('mato grosso do sul'));
        $this->app->validator->extend('inscricao_estadual_mg', "{$className}@validateInscricaoEstadualMg", $this->defaultMessage('minas gerais'));
        $this->app->validator->extend('inscricao_estadual_pa', "{$className}@validateInscricaoEstadualPa", $this->defaultMessage('pará'));
        $this->app->validator->extend('inscricao_estadual_pb', "{$className}@validateInscricaoEstadualPb", $this->defaultMessage('paraíba'));
        $this->app->validator->extend('inscricao_estadual_pr', "{$className}@validateInscricaoEstadualPr", $this->defaultMessage('paraná'));
        $this->app->validator->extend('inscricao_estadual_pe', "{$className}@validateInscricaoEstadualPe", $this->defaultMessage('pernambuco'));
        $this->app->validator->extend('inscricao_estadual_pi', "{$className}@validateInscricaoEstadualPi", $this->defaultMessage('piauí'));
        $this->app->validator->extend('inscricao_estadual_rj', "{$className}@validateInscricaoEstadualRj", $this->defaultMessage('rio de janeiro'));
        $this->app->validator->extend('inscricao_estadual_rn', "{$className}@validateInscricaoEstadualRn", $this->defaultMessage('rio grande do norte'));
        $this->app->validator->extend('inscricao_estadual_rs', "{$className}@validateInscricaoEstadualRs", $this->defaultMessage('rio grande do sul'));
        $this->app->validator->extend('inscricao_estadual_ro', "{$className}@validateInscricaoEstadualRo", $this->defaultMessage('rondônia'));
        $this->app->validator->extend('inscricao_estadual_rr', "{$className}@validateInscricaoEstadualRr", $this->defaultMessage('roraima'));
        $this->app->validator->extend('inscricao_estadual_sc', "{$className}@validateInscricaoEstadualSc", $this->defaultMessage('santa catarina'));
        $this->app->validator->extend('inscricao_estadual_sp', "{$className}@validateInscricaoEstadualSp", $this->defaultMessage('são paulo'));
        $this->app->validator->extend('inscricao_estadual_se', "{$className}@validateInscricaoEstadualSe", $this->defaultMessage('sergipe'));
        $this->app->validator->extend('inscricao_estadual_to', "{$className}@validateInscricaoEstadualTo", $this->defaultMessage('tocantins'));
    }

    protected function defaultMessage(string $estado): string
    {
        return "O campo :attribute deve ser uma inscrição estadual do {$estado} válida.";
    }
}
