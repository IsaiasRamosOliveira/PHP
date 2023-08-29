<?php
include_once "bank.php";

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practice 1</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      list-style: none;
    }

    #container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
      color: aliceblue;
      background-color: black;
    }

    table,
    tr,
    th,
    td {
      border: 1px solid;
    }

    tr,
    th,
    td {
      padding: 10px 20px;
    }

    th {
      background-color: darkorange
    }
  </style>
</head>

<body>
  <main id="container">
    <h1><i>Practice 1</i></h1>
    <br>
    <table>
      <tr>
        <th>Nome</th>
        <th>Saldo</th>
      </tr>
      <?php foreach ($users as $index => $user) { ?>
        <tr>
          <td>
            <?= $user["name"]; ?>
          </td>
          <td>
            <?= $user["balance"]; ?>
          </td>
        </tr>
      <?php } ?>
    </table>
  </main>
</body>

</html>