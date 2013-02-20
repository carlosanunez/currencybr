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
