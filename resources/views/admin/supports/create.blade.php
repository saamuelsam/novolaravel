<h1>Nova Dúvida</h1>

@if($errors->any()) <!-- o any verifica se tem algum erro -->
  @foreach($errors->all() as $error)
  {{$error}}
  @endforeach
@endif

<form action="{{ route('supports.store') }}" method="POST">
  <!-- <input type="text" value="{{csrf_token() }}" name="_token"> -->
  @csrf()
  <input type="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}"> <!-- o old diz se tem um valor ele vai persistir esse valor -->
  <textarea name="body" cols="30" rows="5" style="resize: none;">{{ old('body')}}</textarea>
  <button type="submit">Enviar</button>
</form>   