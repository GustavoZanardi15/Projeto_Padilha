<h1>LISTAGEM</h1>

<?php 
    $result = mysqli_query($conexao, "SELECT * FROM usuarios"); 
    $qtd = $result -> num_rows;

    if ($qtd >  0) {
        echo "<p>Encontrou <strong>$qtd</strong> resultado(s)</p>";

        $html = "<table class='table table-bordered table-striped table-hover'>";

        $html .= "<tr>";
        $html .= "<th>#</th>";
        $html .= "<th>IP LOCAL</th>";
        $html .= "<th>NOME DO PC</th>";
        $html .= "<th>SETOR</th>";
        $html .= "</tr>";

        while ($row = $result -> fetch_object()) {
            $html .= "<tr>";
            $html .= "<td>" . $row -> id . "</td>";
            $html .= "<td>" . $row -> ip_usuario . "</td>";
            $html .= "<td>" . $row -> nome_pc . "</td>";
            $html .= "<td>" . $row -> setor . "</td>";
            $html .= "</tr>";
        }

        $html .= "</table>";

    }
    else {
        $html . "Não encontrou resultado";
    }

    echo $html;


    

?>