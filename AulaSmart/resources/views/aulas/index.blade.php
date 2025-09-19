<!-- resources/views/aulas/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Aulas</title>
</head>
<body>
    <h1>Lista de Aulas</h1>
    @foreach($aulas as $aula)
        <p>{{ $aula->nombre }}</p>
    @endforeach
</body>
</html>
