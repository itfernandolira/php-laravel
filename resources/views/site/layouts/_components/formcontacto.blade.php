{{ $slot }}
<form action="{{ route('site.contacts') }}" method="post">
    @csrf
    <input name="nome" value="{{ old('nome') }}" type="text" placeholder="Nome" class="{{ $classe }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $classe }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $classe }}">
    <br>
    <select name="motivo" class="{{ $classe }}">
        <option value="0">Qual o motivo do contato?</option>
        @foreach ($motivos as $key => $motivo)
            <option value="{{ $key }}" {{ old('motivo')==$key ? 'selected':'' }}>{{ $motivo }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">@if(old('mensagem')!=''){{ old('mensagem') }}@else Preencha aqui a sua mensagem @endif    
    </textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>