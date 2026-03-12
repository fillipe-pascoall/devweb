<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devweb</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Ubuntu', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .navbar {
            background-color: #ff7f50;
        }

        .navbar-brand {
            font-size: 1.5em;
        }

        .hero-section {
            background:  #ff7f50;
            color: white;
            padding: 80px 0;
            margin-bottom: 50px;
        }

        .subdomain-card {
            border: none;
            border-radius: 15px;
            transition: all 0.3s ease;
            background: #ffffff;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .icon-box {
            width: 50px;
            height: 50px;
            background: #fff3ef;
            color: #ff7f50;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .btn-outline {
            border-color: #ff7f50;
            color: #ff7f50;
            border-radius: 8px;
            text-transform: uppercase;
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .btn-outline:hover {
            background-color: #ff7f50 !important;
            color: #fff !important;
        }

        footer {
            margin-top: 100px;
            background-color: #0F1020;
            color: white;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e7e7e7;
        }
    </style>
</head>
<body>

    <!-- Barra de ferramentas -->
    <nav class="navbar navbar-expand-lg navbar-dark px-3">
        <a class="navbar-brand text-uppercase" href="./">
            <span class="bi bi-globe text-dark"></span>
            &nbsp;Devweb
        </a>
    </nav>

    <!-- Hero Header -->
    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Meus Projetos</h1>
            <p class="lead opacity-75">Explore os subdomínios e aplicações da nossa rede.</p>
        </div>
    </header>

    <!-- Lista de Subdomínios -->
    <main class="container">
        <div class="row g-4 justify-content-center px-3">
            
            <!-- Subdomínio 1 -->
            <div class="col-md-4">
                <div class="card h-100 subdomain-card p-4">
                    <div class="icon-box">
                        <i class="bi bi-android"></i>
                    </div>
                    <h4>ByPass</h4>
                    <p class="text-muted small">Acesso as configurações do android e fazer FRP bypass.</p>
                    <a href="bypass/" class="btn btn-outline mt-auto">Acessar Subdomínio</a>
                </div>
            </div>

            <!-- Subdomínio 2 -->
            <div class="col-md-4">
                <div class="card h-100 subdomain-card p-4">
                    <div class="icon-box">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h4>Home Apis</h4>
                    <p class="text-muted small">Acesse nossa API e integre nossos serviços em sua aplicação.</p>
                    <a href="https://homeapis.vercel.app" class="btn btn-outline mt-auto">Acessar Subdomínio</a>
                </div>
            </div>

            <!-- Subdomínio 3 -->
            <div class="col-md-4">
                <div class="card h-100 subdomain-card p-4">
                    <div class="icon-box">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h4>Blog/Notícias</h4>
                    <p class="text-muted small">Artigos semanais sobre tecnologia e desenvolvimento.</p>
                    <a href="https://blog.seusite.com" class="btn btn-outline mt-auto">Acessar Subdomínio</a>
                </div>
            </div>

            <!-- Subdomínio 4 -->
            <div class="col-md-4">
                <div class="card h-100 subdomain-card p-4">
                    <div class="icon-box">
                        <i class="bi bi-person-gear"></i>
                    </div>
                    <h4>Área do Cliente</h4>
                    <p class="text-muted small">Gerencie sua conta, faturas e suporte técnico personalizado.</p>
                    <a href="https://cliente.seusite.com" class="btn btn-outline mt-auto">Acessar Subdomínio</a>
                </div>
            </div>

            <!-- Subdomínio 5 -->
            <div class="col-md-4">
                <div class="card h-100 subdomain-card p-4">
                    <div class="icon-box">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h4>Documentação API</h4>
                    <p class="text-muted small">Guia completo para desenvolvedores integrarem nossos serviços.</p>
                    <a href="https://api.seusite.com" class="btn btn-outline mt-auto">Acessar Subdomínio</a>
                </div>
            </div>

        </div>
    </main>

    <!-- Rodapé -->
    <footer>
       <p>Este site foi criado por <span class="color-default fw-bold">Fillipe Pascoall</span></p>
        <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>