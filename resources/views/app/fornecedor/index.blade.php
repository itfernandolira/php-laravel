<h3>Fornecedor</h3>

{{-- Comentário em Blade --}}

{{ 'Texto de teste' }}
<br>
<?= 'Texto de teste' ?>
<br>

{{-- Como incluir blocos de php puro --}}
@php
    //Aqui podemos incluir qualquer sintaxe de PHP
    echo "Texto de teste";
@endphp