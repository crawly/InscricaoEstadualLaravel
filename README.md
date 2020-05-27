# InscricaoEstadualLaravel
Lib de validação de inscrição estadual no laravel

## Instalação
```
composer require crawly/inscricao-estadual-laravel
```

## Exemplo de uso
```
$request->validate([
    'inscricao_estadual_sp' => 'required|inscricao_estadual_sp',
]);
```
