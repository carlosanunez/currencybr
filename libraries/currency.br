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
	
	public function toView($value)
    {	
		return 'R$ ' . number_format($value, 2, ',', '.');
	}
}
