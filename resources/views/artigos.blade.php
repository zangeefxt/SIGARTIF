<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conheça nossos artigos</title>

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
                        <a class="nav-link" href="{{ url('/artigos') }}">Conheça nossos artigos</a>
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
    <h1 class="text-center mb-5" style="color: var(--primary-color);">Conheça nossos Artigos Científicos</h1>

    <div class="row">

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Título do Artigo 1</h5>
                    <p class="card-text">
                        Este artigo explora as recentes inovações na tecnologia XYZ, analisando suas implicações no mercado global e seus benefícios para a sustentabilidade.
                    </p>
                    <a href="#" class="btn btn-primary">Leia Mais</a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Título do Artigo 2</h5>
                    <p class="card-text">
                        Uma análise detalhada sobre o impacto da IA no desenvolvimento de novos medicamentos, mostrando como a tecnologia tem acelerado os processos de pesquisa.
                    </p>
                    <a href="#" class="btn btn-primary">Leia Mais</a>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Título do Artigo 3</h5>
                    <p class="card-text">
                        Este artigo aborda as mudanças climáticas e as novas práticas agrícolas que podem ajudar a reduzir o impacto ambiental e melhorar a produção sustentável.
                    </p>
                    <a href="#" class="btn btn-primary">Leia Mais</a>
                </div>
            </div>
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
