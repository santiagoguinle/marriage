@extends('layoutGame')

@section('title', 'Respuestas #{{ $question->order }}')

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
        Opciones de pregunta: {{ $question->question }}
    </span>    
    
    <div id="container">
        <table class="table table-sm">
            <caption>
                <a href="/config/new/option/{{ $question->id }}" class="btn btn-success btn-sm">Nueva opcion</a>
                <a href="/config" class="btn btn-info btn-sm">Volver</a>
            </caption>
            <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Respuesta
                    </th>
                    <th>
                        Orden
                    </th>
                    <th>
                        Es correcta
                    </th>
                    <th>
                        Valor
                    </th>
                    
                    <th>
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($options as $option)
            <tr>
                <td>
                    {{ $option->id }}
                </td>
                <td>
                    {{ $option->option }}
                </td>
                <td>
                    {{ $option->order }}
                </td>
                <td>
                    @if ($option->is_correct == 1) 
                    Si
                    @else
                    No
                    @endif
                </td>
                <td>
                    {{ $option->value }}
                </td>
                <td>
                    <a href="/config/option/{{ $option->id }}" class="btn btn-success btn-sm">Editar</a>
                    <a href="/config/deleteOption/{{ $option->id }}" class="btn btn-warning btn-sm" onclick="return confirm('Seguro queres borrar la pregunta?')">Borrar </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</form>
@endsection
