<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ProductManager</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: #00072d no-repeat center center;
            background-size: cover;
            color: white;
            height: 600px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">ProductManager</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Cadastro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1 class="display-4">Bem-vindo ao ProductManager!</h1>
            <p class="lead">O ProductManager é uma solução completa para gerenciar suas listas de produtos e usuários de forma simples e eficiente. Organize seu estoque, adicione novos produtos e mantenha suas informações de usuários sempre atualizadas!</p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Comece Agora</a>
        </div>
    </div>

    <!-- Rodapé -->
    <footer class="bg-light text-center text-lg-start mt-5">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>Contato</h5>
                    <p>Email: <a href="mailto:contato@productmanager.com">contato@productmanager.com</a></p>
                    <p>Telefone: <a href="tel:+5511999999999">(11) 99999-9999</a></p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Redes Sociais</h5>
                    <a href="#" class="text-dark mr-2" title="Facebook">
                        <i class="bi bi-facebook" style="font-size: 1.5rem;"></i>
                    </a>
                    <a href="#" class="text-dark mr-2" title="Twitter">
                        <i class="bi bi-twitter" style="font-size: 1.5rem;"></i>
                    </a>
                    <a href="#" class="text-dark mr-2" title="Instagram">
                        <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
                    </a>
                    <a href="#" class="text-dark" title="LinkedIn">
                        <i class="bi bi-linkedin" style="font-size: 1.5rem;"></i>
                    </a>
                </div>
            </div>
            <p>&copy; 2024 ProductManager. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Adicione o link para o Bootstrap Icons no head -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>