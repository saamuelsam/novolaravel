
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <link href= "{{ asset('edit/edit.css') }}"  rel="stylesheet"/>


<h1>Dúvida {{$support->id}}</h1>

<x-alert/>

<form action="{{ route('supports.update', $support->id) }}" method="POST">
  <!-- <input type="text" value="{{csrf_token() }}" name="_token"> -->
  @method('PUT')
  @include('admin.supports.partials.form', [
    'support' => $support
    ])
  <!-- <input type="text" placeholder="Assunto" name="subject" value="{{$support->subject}}">
  <textarea name="body" cols="30" rows="5" style="resize: none;">{{ $support->body}}</textarea>
  <button class="btn btn-primary mb-4 " type="submit">Enviar</button> -->
</form>   