@extends('layoutGame')

@section('title', 'Editando preguntas')

@section('scripts')
     <script type="text/javascript">
    </script>
</script>
@endsection

@section('styles')
 <style type="text/css">
        #container {
            max-width: 800px;
            min-width: 420px;
            margin: 0 auto;
        }

    </style>

@endsection

@section('content')
<form class="contact3-form validate-form">
    <span class="contact3-form-subtitle">
        Listado de Preguntas
    </span>    
    
    <div id="container">
        <table class="table table-sm">
            <caption>
                <a href="/config/new/question" class="btn btn-success btn-sm">Nueva pregunta</a>
            </caption>
            <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Pregunta
                    </th>
                    <th>
                        Orden
                    </th>
                    <th>
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($questions as $question)
            <tr>
                <td>
                    {{ $question->id }}
                </td>
                <td>
                    {{ $question->question }}
                </td>
                <td>
                    {{ $question->order }}
                </td>
                <td>
                    <a href="/config/question/{{ $question->id }}" class="btn btn-success btn-sm">Editar</a>
                    <a href="/config/options/{{ $question->id }}" class="btn btn-info btn-sm">Respuestas</a>
                    <a href="/config/deleteQuestion/{{ $question->id }}" class="btn btn-warning btn-sm" onclick="return confirm('Seguro queres borrar la pregunta?')">Borrar </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</form>
@endsection
