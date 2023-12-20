<?php
require_once 'vendor/autoload.php'; // Certifique-se de ter instalado o pacote Faker via Composer

// Configurações do banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Checa a conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Criando o Faker
$faker = Faker\Factory::create('pt_BR'); // Usando a localização do Brasil para dados mais realistas

for ($i = 0; $i < 10000; $i++) { // Gerando 10000 registros
  $nome = $faker->firstName;
  $sobrenome = $faker->lastName;
  $email = $faker->email;
  $telefone = $faker->phoneNumber;
  $endereco = $faker->address;
  $cidade = $faker->city;
  $bairro = $faker->word; // Pode ser melhorado com dados mais realistas
  $estado = $faker->state;
  $pais = $faker->country;
  $genero = $faker->randomElement(['Masculino', 'Feminino', 'Outro']);
  $estado_civil = $faker->randomElement(['Solteiro(a)', 'Casado(a)', 'Divorciado(a)', 'Viúvo(a)', 'Outro']);
  $idade = $faker->numberBetween(18, 80);

  // Inserindo dados falsos na tabela
  $sql = "INSERT INTO dados_falsos (nome, sobrenome, email, telefone, endereco, cidade, bairro, estado, pais, genero, estado_civil, idade)
    VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$endereco', '$cidade', '$bairro', '$estado', '$pais', '$genero', '$estado_civil', '$idade')";

  if ($conn->query($sql) === TRUE) {
    echo "Inserção de dados falsos realizada com sucesso\n";
  } else {
    echo "Erro na inserção de dados: " . $conn->error . "\n";
  }
}

$conn->close();
