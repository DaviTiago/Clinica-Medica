<?php

require "conexao-mysql.php";
$pdo = conexaoMysql();

try {

    $sql = <<<SQL
    SELECT m.especialidade, m.crm, p.nome, a.data, a.horario
    FROM medico m INNER JOIN pessoa p ON m.codigo = p.codigo 
    INNER JOIN agenda a ON m.codigo = a.codigo_medico
    ORDER BY a.horario
    SQL;

    $stmt = $pdo->query($sql);
    $listagem = $stmt->fetchAll();
} catch (Exception $e) {
    exit('Ocorreu uma falha: ' . $e->getMessage());
}

header("Content-type: application/json; charset=UTF-8");
echo json_encode($listagem);
