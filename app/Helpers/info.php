<?php

/**
 * Retorna um array com os estados brasileiros.
 *
 * @param bool $return
 * @return array|mixed|null
 */
function estados_brasileiros($return = false)
{
    $estados = [
        'AC'=>'Acre',
        'AL'=>'Alagoas',
        'AP'=>'Amapá',
        'AM'=>'Amazonas',
        'BA'=>'Bahia',
        'CE'=>'Ceará',
        'DF'=>'Distrito Federal',
        'ES'=>'Espírito Santo',
        'GO'=>'Goiás',
        'MA'=>'Maranhão',
        'MT'=>'Mato Grosso',
        'MS'=>'Mato Grosso do Sul',
        'MG'=>'Minas Gerais',
        'PA'=>'Pará',
        'PB'=>'Paraíba',
        'PR'=>'Paraná',
        'PE'=>'Pernambuco',
        'PI'=>'Piauí',
        'RJ'=>'Rio de Janeiro',
        'RN'=>'Rio Grande do Norte',
        'RS'=>'Rio Grande do Sul',
        'RO'=>'Rondônia',
        'RR'=>'Roraima',
        'SC'=>'Santa Catarina',
        'SP'=>'São Paulo',
        'SE'=>'Sergipe',
        'TO'=>'Tocantins'
    ];

    if($return !== false)
    {
        if(isset($estados[$return]))
            return $estados[$return];
        else
            return null;
    }
    else
        return $estados;
}

function api_estados_brasileiros($return = false)
{
    $estados = [
        ['value' => 'AC', 'label' => 'Acre'],
        ['value' => 'AL', 'label' =>'Alagoas'],
        ['value' => 'AP', 'label' =>'Amapá'],
        ['value' => 'AM', 'label' =>'Amazonas'],
        ['value' => 'BA', 'label' =>'Bahia'],
        ['value' => 'CE', 'label' =>'Ceará'],
        ['value' => 'DF', 'label' =>'Distrito Federal'],
        ['value' => 'ES', 'label' =>'Espírito Santo'],
        ['value' => 'GO', 'label' =>'Goiás'],
        ['value' => 'MA', 'label' =>'Maranhão'],
        ['value' => 'MT', 'label' =>'Mato Grosso'],
        ['value' => 'MS', 'label' =>'Mato Grosso do Sul'],
        ['value' => 'MG', 'label' =>'Minas Gerais'],
        ['value' => 'PA', 'label' =>'Pará'],
        ['value' => 'PB', 'label' =>'Paraíba'],
        ['value' => 'PR', 'label' =>'Paraná'],
        ['value' => 'PE', 'label' =>'Pernambuco'],
        ['value' => 'PI', 'label' =>'Piauí'],
        ['value' => 'RJ', 'label' =>'Rio de Janeiro'],
        ['value' => 'RN', 'label' =>'Rio Grande do Norte'],
        ['value' => 'RS', 'label' =>'Rio Grande do Sul'],
        ['value' => 'RO', 'label' =>'Rondônia'],
        ['value' => 'RR', 'label' =>'Roraima'],
        ['value' => 'SC', 'label' =>'Santa Catarina'],
        ['value' => 'SP', 'label' =>'São Paulo'],
        ['value' => 'SE', 'label' =>'Sergipe'],
        ['value' => 'TO', 'label' =>'Tocantins']
    ];

    return $estados;
}

function api_estados_civies()
{
    $estados = [
        ['value' => 'solteiro', 'label' => 'Solteiro(a)'],
        ['value' => 'casado', 'label' => 'Casado(a)'],
        ['value' => 'separado', 'label' => 'Separado(a)'],
        ['value' => 'divorciado', 'label' => 'Divorciado(a)'],
        ['value' => 'viuvo', 'label' => 'Viúvo(a)'],
    ];

    return $estados;
}

function meses($mes)
{
    switch($mes) {
        case 1:
            return 'Janeiro';
            break;
        case 2:
            return 'Fevereiro';
            break;
        case 3:
            return 'Março';
            break;
        case 4:
            return 'Abril';
            break;
        case 5:
            return 'Maio';
            break;
        case 6:
            return 'Junho';
            break;
        case 7:
            return 'Julho';
            break;
        case 8:
            return 'Agosto';
            break;
        case 9:
            return 'Setembro';
            break;
        case 10:
            return 'Outubro';
            break;
        case 11:
            return 'Novembro';
            break;
        case 12:
            return 'Dezembro';
            break;
    }
}

