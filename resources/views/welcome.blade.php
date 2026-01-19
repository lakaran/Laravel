<!DOCTYPE html>
<html>
<head>
    <title>Ranking</title>
</head>
<body>

<h2>Adicionar Pontuação</h2>

<form method="POST" action="{{ route('score.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Nome" required>
    <input type="number" name="score" placeholder="Pontuação" required>
    <button type="submit">Guardar</button>
</form>



</body>
</html>
