<?php
require_once '../../libs/tcpdf/tcpdf.php';
require_once '../../bd.php';


$sentencia = $conexion->prepare("SELECT * FROM `tbl_portafolio`");
$sentencia->execute();
$lista_portafolio = $sentencia->fetchAll(PDO::FETCH_ASSOC);

$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);

$html = '<h1>Lista de Portafolio</h1>';
$html .= '<table border="1" cellpadding="4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Horario</th>
                    <th>Barrio</th>
                </tr>
            </thead>
            <tbody>';
foreach ($lista_portafolio as $registros) {
    $html .= '<tr>
                <td>' . $registros['ID'] . '</td>
                <td>' . $registros['titulo'] . '</td>
                <td>' . $registros['descripcion'] . '</td>
                <td>' . $registros['horario'] . '</td>
                <td>' . $registros['barrio'] . '</td>
              </tr>';
}
$html .= '</tbody></table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('portafolio.pdf', 'D');
