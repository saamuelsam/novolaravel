<h1>Detalhes da Dúvida {{$support->id}}</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href= "{{ asset('show/show.css') }}"  rel="stylesheet"/>
<ul>
  <li>Assunto: {{$support->subject}}</li>
  <li>Status: {{$support->body}}</li>
  <li>Descrição: {{$support->status}}</li>
  </ul>

  <form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @csrf()
    @method('DELETE')
    <button class="btn btn-primary mb-4" type="submit">Deletar</button>
  </form>