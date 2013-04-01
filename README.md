# CurrencyBR Bundle para o conversão de valores decimais em Reais no Framework Laravel #

Baseado no DateBr do http://github.com/osvaldogusmao (http://github.com/osvaldogusmao/datebr)

## Instalação ##

Instalando usando o Artisan.

```
php artisan bundle:install currencybr
```  
Ou você pode baixar e inclui-lo na sua pastas de bundles: ``app/bundles``  

E no arquivo ``application/bundles.php`` adicionar a seguinte linha:

```php
'currencybr' => array('auto' => true),
```

Para utiliza-lo na view basta digitar

```
{{ CurrencyBR::toView(119.99) }}
```

Caso queira diferenciar numeros positivos dos negativos é possível passar um segundo parametro

```
{{ CurrencyBR::toView(119.99, true) }}
```

o resultado será
```
<span class="positivo">R$ 119,99</span>
```

E...

```
{{ CurrencyBR::toView(-119.99, true) }}
```

o resultado será
```
<span class="negativo">R$ -119,99</span>
```

Por padrão o segundo parametro é sempre false
