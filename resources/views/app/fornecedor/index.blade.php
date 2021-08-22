<h3>Fornecedor</h3>

@isset($fornecedores)

    @if(count($fornecedores)>0)
        <h4>Existem fornecedores registados!</h4>
    @else
        <h4>Não existem fornecedores registados!</h4>
    @endif

    Com FOR<br>
    @for($i=0;$i<count($fornecedores);$i++)
        Nome: {{ $fornecedores[$i]['nome'] }}<br>
        Distrito:
        @switch($fornecedores[$i]['distrito'])
            @case('13')
                {{ $fornecedores[$i]['distrito'] }} - Porto
                @break
            @case('2')
                {{ $fornecedores[$i]['distrito'] }} - Braga
                @break
            @default
                Distrito desconhecido
        @endswitch
        <br>
        <br>
    @endfor

    Com WHILE<br>
    @php $i=0 @endphp
    @while(isset($fornecedores[$i]))
        Nome: {{ $fornecedores[$i]['nome'] }}<br>
        Distrito:
        @switch($fornecedores[$i]['distrito'])
            @case('13')
                {{ $fornecedores[$i]['distrito'] }} - Porto
                @break
            @case('2')
                {{ $fornecedores[$i]['distrito'] }} - Braga
                @break
            @default
                Distrito desconhecido
        @endswitch
        <br>
        <br>
        @php $i++ @endphp
    @endwhile

    @if(!@empty($fornecedores))
    {{-- Mostrar todo o conteúdo de um array--}}
    @dd($fornecedores)
    @endif

@endisset