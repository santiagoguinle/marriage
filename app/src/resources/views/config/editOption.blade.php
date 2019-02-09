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

<form class="contact3-form validate-form"  method="POST" action="/config/option/{{ $option->id }}">
    {{ csrf_field() }}
    <input type="hidden" class="form-control" id="id" name="id" value="{{ $option->id }}">
    <input type="hidden" class="form-control" id="order" name="order" value="{{ $option->order }}">
          
    <span class="contact3-form-subtitle">
        El Juego del Casamiento de Luli y Santi
    </span>

    <span class="contact3-form-title">
        Editando pregunta
    </span>

    <div id="container">

        <div class="form-group">
          <label for="option">Opcion de Respuesta</label>
          <input type="text" class="form-control" id="option" aria-describedby="option" placeholder="Respuesta" name="option" value="{{ $option->option }}">
        </div>
        <div class="form-group">
          <label for="value">Es correcta</label>
          <select class="form-control" id="is_correct" name="is_correct">
              <option  value='1' @if ($option->is_correct==1) @then selected="selected" @endif >Si</option>
              <option  value='0' @if ($option->is_correct==0) @then selected="selected" @endif >No</option>
          </select>
          
        </div>
        <div class="form-group">
          <label for="value">Value</label>
          <input type="number" class="form-control" id="value" placeholder="1" name="value" value="{{ $option->value }}">
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/config/options/{{ $option->question_id}}" class="btn btn-info">Volver al listado de opciones</a>
    </div>

</form>

@endsection
