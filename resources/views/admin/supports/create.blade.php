<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<h1>Nova Dúvida</h1>
<link href= "{{ asset('create/create.css') }}"  rel="stylesheet"/>

@if($errors->any()) <!-- o any verifica se tem algum erro -->
  @foreach($errors->all() as $error)
  {{$error}}
  @endforeach
@endif

<form class="form-top" action="{{ route('supports.store') }}" method="POST">
  <!-- <input type="text" value="{{csrf_token() }}" name="_token"> -->
  @csrf()
  <div class="textb2">
    <input class="inputb2" type="text" placeholder="Assunto" name="subject" value="{{ old('subject') }}"> <!-- o old diz se tem um valor ele vai persistir esse valor -->
    
    <textarea  name="body" cols="30" rows="5" style="resize: none;">{{ old('body')}}</textarea>
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>   