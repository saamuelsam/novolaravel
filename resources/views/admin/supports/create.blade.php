<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<h1>Nova Dúvida</h1>
<link href= "{{ asset('create/create.css') }}"  rel="stylesheet"/>

<x-alert/>

<form class="form-top" action="{{ route('supports.store') }}" method="POST">
  <!-- <input type="text" value="{{csrf_token() }}" name="_token"> -->
  
  @include('admin.supports.partials.form')

  <!-- teste -->
</form>   