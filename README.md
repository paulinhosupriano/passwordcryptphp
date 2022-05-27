# Password
Classe utilizada para criar, verificar e gerar senhas.


Criar senha
```php
<?php 
    require_once __DIR__.'/vendor/autoload.php';

    use PaulinhoSupriano\passwordCryptPHP;

    // criar uma senha codificada
    $passwordCodify = (Password::crypt('123456'));
?>
```


Verificar senha
```php
<?php 
    require_once __DIR__.'/vendor/autoload.php';

    use PaulinhoSupriano\passwordCryptPHP;
    
    $passwordCodify = (Password::crypt('123456'));
    // verificar
    if(Password::check('123456',$passwordCodify)){
        return 'Passou!';
    }else{
        return 'Não Passou.';
    }
?>
```

Gerar senha 
```php
<?php 
    require_once __DIR__.'/vendor/autoload.php';

    use PaulinhoSupriano\passwordCryptPHP;

    // gerar senha aleatória [Padrão 8 Dígitos]
    $passwordGenerate = Password::randomPassword(); // gera com 8 digitos
    
    // gerar com quantidade especifica. 
    $passwordGenerateLimit = Password::randomPassword(12); // gera com 12 digitos
?>
```


  
