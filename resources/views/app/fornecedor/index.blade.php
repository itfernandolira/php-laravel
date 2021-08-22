<h3>Fornecedor</h3>

@if(count($fornecedores)>0)
    <h4>Existem fornecedores registados!</h4>
@else
    <h4>Não existem fornecedores registados!</h4>
@endif

{{-- Mostrar todo o conteúdo de um array--}}
@dd($fornecedores)