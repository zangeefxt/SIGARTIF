<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGARTIF</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>


<header class="bg-dark text-white py-3 mb-5">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">Instituto Federal do Paraná</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/faleconosco') }}">Fale Conosco</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/artigos')}}">Conheça nossos artigos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Opção Futura 2</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="mb-4" style="color: var(--primary-color);">Bem-vindo ao Portal de Upload de Artigos Científicos o SIGARTIF</h1>
            <p class="mb-4">Aqui você pode enviar seus artigos científicos para nossa base de dados e contribuir para o desenvolvimento da pesquisa.</p>
            <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="file" class="form-label">Selecione seu artigo (PDF)</label>
                    <input type="file" class="form-control" id="file" name="file" accept=".pdf" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Artigo</button>
            </form>
        </div>
    </div>
</div>


<footer class="bg-dark text-white mt-5 p-4 text-center">
    <div class="container">
        <div class="row">

            <div class="col-md-6 mb-3">
                <h5>Instituto Federal do Paraná</h5>
                <p>Um software desenvolvido por uma instituição pública para instituições públicas.</p>
            </div>

            <div class="col-md-3 mb-3">
                <h5>Links úteis</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/index') }}" class="text-white">Início</a></li>
                    <li><a href="#" class="text-white">Sobre nós</a></li>
                    <li><a href="#" class="text-white">Contato</a></li>
                </ul>
            </div>


            <div class="col-md-3 mb-3">
                <h5>Redes Sociais</h5>
                <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i> Facebook</a><br>
                <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i> Instagram</a><br>
                <a href="#" class="text-white"><i class="bi bi-twitter"></i> Twitter</a>
            </div>
        </div>
        <hr class="my-4">
        <p>&copy; 2024 Instituto Federal do Paraná - Todos os direitos reservados.</p>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
