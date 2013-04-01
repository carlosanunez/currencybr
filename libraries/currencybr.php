<?php

/**
 * Bundle conversor de valor monetario no formato FLOAT para o padrão brasileiro em REAIS
 * 
 * @package     currencybr
 * @author      Andre Ribas <zitoloco@gmail.com>
 * @basedon     
 */

class CurrencyBR{

    public static function toMysql($value)
    {
        $float = preg_replace('/[^,0-9]/i', '', $value);
        return str_replace(',', '.', $float);
}

    public static function toView($value, $color = false)
    {
        $retorno = "sem valor";
        if ($color && $value != 0)
        {
            if ($value < 0)
            {
                $class = 'negativo';
            }
            else
            {
                $class = 'positivo';
            }
            $retorno = '<span class="' . $class . '">R$ ' . number_format($value, 2, ',', '.') . '</span>';
        } 
        else 
        {
            $retorno = 'R$ ' . number_format($value, 2, ',', '.');
        }
        return $retorno;
    }
}
