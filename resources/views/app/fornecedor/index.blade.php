<h3>Fornecedor</h3>

@isset($fornecedores)

    @if(count($fornecedores)>0)
        <h4>Existem fornecedores registados!</h4>
    @else
        <h4>Não existem fornecedores registados!</h4>
    @endif

    Primeiro: {{ $fornecedores[0] }}<br>
    Segundo: {{ $fornecedores[1] ?? 'Não existe' }}<br>

    @if(!@empty($fornecedores))
    {{-- Mostrar todo o conteúdo de um array--}}
    @dd($fornecedores)
    @endif

@endisset