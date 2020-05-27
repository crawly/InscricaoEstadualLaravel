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
        $me = $this;

        $this->app['validator']->resolver(function ($translator, $data, $rules, $messages, $attributes) use ($me) {
            $messages += $me->getMessages();

            return new Validator($translator, $data, $rules, $messages, $attributes);
        });
    }

    protected function getMessages()
    {
        return [
            'inscricao_estadual_ac' => $this->defaultMessage('acre'),
            'inscricao_estadual_al' => $this->defaultMessage('alagoas'),
            'inscricao_estadual_ap' => $this->defaultMessage('amapa'),
            'inscricao_estadual_am' => $this->defaultMessage('amazonas'),
            'inscricao_estadual_ba' => $this->defaultMessage('bahia'),
            'inscricao_estadual_ce' => $this->defaultMessage('ceará'),
            'inscricao_estadual_df' => $this->defaultMessage('distrito federal'),
            'inscricao_estadual_es' => $this->defaultMessage('espirito santo'),
            'inscricao_estadual_go' => $this->defaultMessage('goiás'),
            'inscricao_estadual_ma' => $this->defaultMessage('maranhao'),
            'inscricao_estadual_mt' => $this->defaultMessage('mato grosso'),
            'inscricao_estadual_ms' => $this->defaultMessage('mato grosso do sul'),
            'inscricao_estadual_mg' => $this->defaultMessage('minas gerais'),
            'inscricao_estadual_pa' => $this->defaultMessage('pará'),
            'inscricao_estadual_pb' => $this->defaultMessage('paraíba'),
            'inscricao_estadual_pr' => $this->defaultMessage('paraná'),
            'inscricao_estadual_pe' => $this->defaultMessage('pernambuco'),
            'inscricao_estadual_pi' => $this->defaultMessage('piauí'),
            'inscricao_estadual_rj' => $this->defaultMessage('rio de janeiro'),
            'inscricao_estadual_rn' => $this->defaultMessage('rio grande do norte'),
            'inscricao_estadual_rs' => $this->defaultMessage('rio grande do sul'),
            'inscricao_estadual_ro' => $this->defaultMessage('rondônia'),
            'inscricao_estadual_rr' => $this->defaultMessage('roraima'),
            'inscricao_estadual_sc' => $this->defaultMessage('santa catarina'),
            'inscricao_estadual_sp' => $this->defaultMessage('são paulo'),
            'inscricao_estadual_se' => $this->defaultMessage('sergipe'),
            'inscricao_estadual_to' => $this->defaultMessage('tocantins'),
        ];
    }

    protected function defaultMessage(string $estado): string
    {
        return "O campo :attribute deve ser uma inscrição estadual do {$estado} válida.";
    }
}
