<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  $stmt->$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt->$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

  // ASSUNTO DA AULA
  $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (:nome, :descricao)");

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
  $descricao = "O suporte está novo e na caixa ainda.";

  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);

  $stmt->execute();