<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

<!-- Header -->
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
                        <a class="nav-link" href="{{ url('/index') }}">Início</a>
                    </li>
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

<!-- Conteúdo Principal -->
<div class="container">
    <h1 class="text-center mb-4" style="color: var(--primary-color);">Fale Conosco</h1>

    <div class="row mb-5">
        <div class="col-md-6">
            <h3>Entre em contato</h3>
            <p>Email: contato@ifpr.edu.br</p>
            <p>Telefone: (41) 1234-5678</p>
            <p>Endereço: Rua Exemplo, 123, Paranaguá - PR</p>
        </div>

        <div class="col-md-6">
            <h3>Nossa Localização</h3>
            <!-- Mapa do Google -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7196.965748554995!2d-48.57145830711422!3d-25.5888659598433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94db8fdc75a02a3d%3A0x6a631ab7094eeb59!2sIFPR%20-%20Campus%20Paranagu%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1729084220963!5m2!1spt-BR!2sbr" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
