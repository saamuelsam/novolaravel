<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href= "{{ asset('index/index.css') }}"  rel="stylesheet"/>
<h1>Listagem dos supports</h1>


<div class="container">

  <a class="btn btn-primary mb-4 " href=" {{ route('supports.create' )}}">Criar Dúvida</a> <!-- MANDA PARA A VIEW SUPPORT CREATE -->

  <table class="table table-dark table-striped table-radius">
  <thead>
    <th>Assunto</th>
    <th>Status</th>
    <th>Descrição</th>
    <th>
      >
    </th>
  </thead>

  <tbody>
    @foreach($supports as $support)
      <tr>
        <td class="text-danger">{{ $support['subject'] }}</td>
        <td class="text-warning">{{ $support['status'] }}</td>
        <td>{{ $support['body'] }}</td>
        <td>
          <a class="text-decoration-none" href="{{route('supports.show', $support['id'])}}">Ir</a>
          <a class="text-decoration-none"   href="{{ route('supports.edit', $support['id'])}}">Editar</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

</div>

