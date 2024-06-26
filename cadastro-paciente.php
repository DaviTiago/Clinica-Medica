<?php
require "php/conexao-mysql.php";
require "php/sessionVerification.php";

session_start();
exitWhenNotLoggedIn();
$pdo = conexaoMysql();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/header-footer-restrito.css">
    <link rel="stylesheet" href="css/cadastro-paciente.css">
    <title>Cadastro de Funcionários</title>
</head>

<body>
    <header>
        <div>
            <span class="material-symbols-outlined">
                navigate_next
            </span>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="cadastro-funcionario.php">Cadastro de Funcionários</a>
                </li>
                <li>
                    <a href="cadastro-paciente.php">Cadastro de Pacientes</a>
                </li>
                <li>
                    <a href="listagem-funcionarios.php">Listagem Funcionários</a>
                </li>
                <li>
                    <a href="listagem-pacientes.php">Listagem Pacientes</a>
                </li>
                <li>
                    <a href="listagem-enderecos.php">Listagem Endereços</a>
                </li>
                <li>
                    <a href="listagem-consultas.php">Listagem Agendamento de Consultas</a>
                </li>
                <li>
                    <a href="listagem-consultas-medico.php">Listagem Agendamento de Consultas (Médico)</a>
                </li>
                <li>
                    <a href="php/logout.php">Voltar para área pública (Logout)</a>
                </li>
            </ul>
        </nav>
        <div>
            <h1>Clinic Pax Anima</h1>
        </div>
        <div><img src="images/logo.png" alt="Logo Clínica Pax Anima"></div>
    </header>

    <main class="container">
        <h2>Cadastro de Pacientes</h2>
        <form name="cadastro-funcionario" action="php/cadastro-paciente.php" method="post">
            <div class="form-group row">
                <div class="col-md-7">
                    <label for="nome">Nome*</label>
                    <input type="text" name="nome" id="nome" class="form-control" required>
                </div>
                <div id="campo-sexo" class="col-md-5">
                    <label>Sexo*</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="M"
                            checked required>
                        <label class="form-check-label" for="masculino">Masculino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" id="feminino" value="F">
                        <label class="form-check-label" for="feminino">Feminino</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="email">Email*</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="telefone">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-3">
                    <label for="cep">CEP*</label>
                    <input type="text" name="cep" id="cep" class="form-control" required>
                </div>
                <div class="col-md-3">
                    <label for="logradouro">Logradouro*</label>
                    <input type="text" name="logradouro" id="logradouro" class="form-control" required readonly>
                </div>
                <div class="col-md-3">
                    <label for="cidade">Cidade*</label>
                    <input type="text" name="cidade" id="cidade" class="form-control" required readonly>
                </div>
                <div class="col-md-3">
                    <label for="estado">Estado*</label>
                    <input type="text" name="estado" id="estado" class="form-control" required readonly>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-4">
                    <label for="peso">Peso*</label>
                    <input type="number" name="peso" id="peso" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="altura">Altura*</label>
                    <input type="number" name="altura" id="altura" class="form-control" required>
                </div>
                <div class="col-md-4">
                    <label for="select-sanguineo">Tipo Sanguíneo*</label>
                    <select name="tipo-sanguineo" id="select-sanguineo" class="form-select" required>
                        <option value="" selected disabled>Selecione...</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </main>
    <footer>
        <a href="https://linktr.ee/Our_Linkedins">Linkedins</a>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/header-restrito.js"></script>
    <script src="js/busca-cep.js"></script>
</body>