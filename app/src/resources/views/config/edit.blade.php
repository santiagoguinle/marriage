@extends('layoutGame')

@section('title', 'Bienvenidos al Juego del casamiento')

@section('scripts')
<script type="text/javascript">
</script>
@endsection

@section('styles')
<style type="text/css">
    #container {
        height: 300px;
        max-width: 800px;
        min-width: 420px;
        margin: 0 auto;
    }
    #heart {
        margin: 30px;
        width: 300px;
        height: 300px;
        position: relative;
    }
     #percent_answers{
        color: #ED6A5A;
        font-size: 48px;
        position: absolute;
        top:105px;
        text-align: center;
        width: 100%;
        display: block;
    }
</style>
@endsection

@section('content')

<form class="contact3-form validate-form"  method="POST" action="/config/question/{{ $question->id }}">
    {{ csrf_field() }}
    <input type="hidden" class="form-control" id="id" name="id" value="{{ $question->id }}">
    <input type="hidden" class="form-control" id="order" name="order" value="{{ $question->order }}">
          
    <span class="contact3-form-subtitle">
        El Juego del Casamiento de Luli y Santi
    </span>

    <span class="contact3-form-title">
        Editando pregunta
    </span>

    <div id="container">

        <div class="form-group">
          <label for="question">Pregunta</label>
          <input type="text" class="form-control" id="question" aria-describedby="question" placeholder="Pregunta" name="question" value="{{ $question->question }}">
        </div>
        <div class="form-group">
          <label for="description">Descripcion</label>
          <input type="text" class="form-control" id="description" placeholder="Descripcion" name="description" value="{{ $question->description }}">
          <small id="description" class="form-text text-muted">Por el momento no se usa para nada.</small>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/config" class="btn btn-info">Volver al listado</button>
    </div>

</form>

@endsection
