<x-layout title="series">
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    {{-- <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a> --}}
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}
            <span class="d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">E</a>
                <form action="{{ route('series.destroy', $serie->id) }}" method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </span>
        </li>
        @endforeach
    </ul>
    {{-- <script>
        const series = {{ Js::from($series) }};
    </script> --}}
</x-layout>

{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series</title>
</head>
<body>
    @foreach ($series as $serie):
    <li>{{ $serie }}</li>
    @endforeach
</body>
</html>
--}}