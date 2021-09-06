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
        <option value="1" {{ old('motivo')==1 ? 'selected':'' }}>Dúvida</option>
        <option value="2" {{ old('motivo')==2 ? 'selected':'' }}>Elogio</option>
        <option value="3" {{ old('motivo')==3 ? 'selected':'' }}>Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="{{ $classe }}">@if(old('mensagem')!=''){{ old('mensagem') }}@else Preencha aqui a sua mensagem @endif    
    </textarea>
    <br>
    <button type="submit" class="{{ $classe }}">ENVIAR</button>
</form>