<?php
require 'fpdf/fpdf.php';

$fpdf = new FPDF(); 
$fpdf ->AddPage();

$fpdf->SetFont('arial', 'B' ,18);
$fpdf->Cell(190, 7, 'RELAT�RIO DE LOTA��O 2022',0, 1, 'C');
$fpdf->Cell(190, 7, 'SUPORTE PEDAG�GICO E APOIO', 0, 1, 'C');

$fpdf->Ln(10);

$fpdf->SetFont('arial', 'B' ,12);
$fpdf->Cell(17, 7, 'Escola:');
$fpdf->SetFont('arial', '' ,12);
$fpdf->Cell(70, 7, 'EEEF Maria Luiza', 0, 1);

$fpdf->SetFont('arial', 'B' ,12);
$fpdf->Cell(13, 7, 'INEP:');
$fpdf->SetFont('arial', '' ,12);
$fpdf->Cell(40, 7, '15039048',);
$fpdf->SetFont('arial', 'B' ,12);
$fpdf->Cell(13, 7, 'URE:',);
$fpdf->SetFont('arial', '' ,12);
$fpdf->Cell(55, 7, '19A URE - BEL�M');
$fpdf->SetFont('arial', 'B' ,12);
$fpdf->Cell(13, 7, 'USE:');
$fpdf->SetFont('arial', '' ,12);
$fpdf->Cell(40, 7, '3a USE', 0, 1);

$fpdf->SetFont('arial', 'B' ,12);
$fpdf->Cell(22, 7, 'Munic�pio:');
$fpdf->SetFont('arial', '' ,12);
$fpdf->Cell(60, 7, 'BEL�M', 0, 1);

$fpdf->Ln(10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(25, 7, 'Nome: ', 1);
$fpdf->SetFont('arial', '' , 10);
$fpdf->Cell(125, 7, 'Jhonata Farias',1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, 'Chapa: ', 1);
$fpdf->SetFont('arial', '' , 10);
$fpdf->Cell(25, 7, '9090909090', 1, 1);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(25, 7, 'Fun��o: ', 1);
$fpdf->SetFont('arial', '' , 10);
$fpdf->Cell(70, 7, 'Analista DBA',1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(25, 7, 'Se��o: ', 1);
$fpdf->SetFont('arial', '' , 10);
$fpdf->Cell(70, 7, '222.333.44.555', 1, 1);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(25, 7, 'CNPJ: ', 1);
$fpdf->SetFont('arial', '' , 10);
$fpdf->Cell(45, 7, '023.023.023.023',1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(25, 7, 'Jornada: ', 1);
$fpdf->SetFont('arial', '' , 10);
$fpdf->Cell(15, 7, '220,00',1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(25, 7, 'Hor�rio: ', 1);
$fpdf->SetFont('arial', '' , 10);
$fpdf->Cell(55, 7, '09:00 - 12:00', 1, 1);

$fpdf->Ln(5);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(95, 7, 'Expediente Normal', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(95, 7, 'Extra', 1, 1);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, 'Dia', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, 'Entrada', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, 'Sa�da', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, 'Entrada', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, 'Sa�da', 1);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, 'Entrada', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, 'Sa�da', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, 'Entrada', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, 'Sa�da', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, 'Total', 1, 1);


$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '16', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'S�b', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '17', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Dom', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '18', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'seg', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '19', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Ter', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '20', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Qua', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '21', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Qui', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '22', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Sex', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '23', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Sab', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '24', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Dom', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '25', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Seg', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '26', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Ter', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '27', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Qua', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '28', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Qui', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '29', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Sex', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '30', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Sab', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(6, 7, '01', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(9, 7, 'Dom', 1,);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);

$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(20, 7, '', 1);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->SetFont('arial', 'B' , 10);
$fpdf->Cell(15, 7, '', 1, 1);
//linha








$NomeArquivo = utf8_decode("Novo_pdf") . '.pdf';
$fpdf->Output('I', $NomeArquivo);
