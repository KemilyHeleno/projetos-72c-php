<? php
$idservico = 0;
$idservicoAnterior = -1;
$totalAtendimentos = 0;
$quantidadePessoas = 0;
$media = 0;

if(empty($mes) || empty($ano))
{
    echo "<script> alert('Favor preencha todos os campos.')</script>";
}else{

    if (isset($hostp))
    {
        $resulta = pg_fetch_array($consulta);
    } else {
        $resulta = $consulta->fetch_array();
    }
while ($resulta) {

    $idservico = $resulta['id_serv'];

    $media = @round($totalAtendimentos / $quantidadePessoas);

    if($idservico != $idservicoAnterior)
    {   
        if($idservicoAnterior != -1)
        {

            echo "<tr>
                    <td style='width: 200px; background-color: #D3D3D3;'></td>
                    <td style='background-color: #D3D3D3;'>Média</td>
                    <td style='background-color: #D3D3D3;'>$media</td>
                    <td style='background-color: #D3D3D3;'></td>
                  </tr>
                </table> <br/>";
        }

        $totalAtendimentos = 0;
        $quantidadePessoas = 0;

        echo "<table border=1>
              <tr style='background-color: #D3D3D3;'>
                <td>Setor</td>
                <td>{$resulta['nm_serv']}</td>
                <td>Total Atendimentos</td>
                <td>Percentual x Média</td>
              </tr>";
    }

    $totalAtendimentos += $resulta['total'];
    $quantidadePessoas += 1;
    $idservicoAnterior = $idservico;

    echo "<tr>
            <td>{$resulta['desc_serv']}</td>
            <td>{$resulta['nm_usu']}</td>
            <td>{$resulta['total']}</td>
            <td>O VALOR DO CÁLCULO VEM AQUI</td>

          </tr>";
?>