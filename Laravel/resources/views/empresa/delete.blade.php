<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Laravel P2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <h1>Formulário de Exclusão de Empresas</h1>
    <div class="alert alert-warning" role="alert">
        Realmente deseja excluir esta empresa?
    <div>
        <div class="mb-3">
            <label class="form-label"><strong>ID:</strong></label>
            <p>{{ $empresa->id }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Nome Fantasia:</strong></label>
            <p>{{ $empresa->nome_fantasia }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>CNPJ:</strong></label>
            <p>{{ $empresa->cnpj }}</p>
        </div>
        <div class="mb-3">
            <label class="form-label"><strong>Receita: R$</strong></label>
            <p>{{ $empresa->receita }}</p>
        </div>
    <form action="{{route('empresa.destroy' , $empresa->id)}}" method="POST">
        @CSRF
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
        <a href="{{ route('empresa.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>