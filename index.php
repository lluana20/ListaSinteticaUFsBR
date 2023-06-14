<!DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista Sintética</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<h1>Unidades federativas do Brasil: Lista Sintética</h1>
	</header>


	<?php
	$estadosbr = array(
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/4/4c/Bandeira_do_Acre.svg" alt="Bandeira do Acre">',
			'Acre',
			'AC',
			'Rio Branco',
			'164 122,2',
			'795 145',
			'4,30',
			'13 622 000	',
			'0,2',
			'16 953,46',
			'0,663',
			'86,9%',
			'17,0‰',
			'73,9 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/8/88/Bandeira_de_Alagoas.svg" alt="Bandeira do Alagoas ">',
			'Alagoas',
			'AL',
			'Maceió',
			'27 767,7',
			'3 327 551',
			'108,61',
			'46 364 000',
			'0,8',
			'13 877,53',
			'0,631',
			'80,6%',
			'19,5‰',
			'71,6 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Bandeira_do_Amapá.svg" alt="Bandeira do Amapá">',
			'Amapá',
			'AP',
			'Macapá',
			'142 814,6',
			'756 500',
			'4,16',
			'13 861 000',
			'0,2',
			'18 079,54',
			'0,708	',
			'95%',
			'23,2‰',
			'73,9 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/6/6b/Bandeira_do_Amazonas.svg" alt="Bandeira do Amazonas ">',
			'Amazonas',
			'AM',
			'Manaus',
			'1 570 745,7',
			'3 893 763',
			'2,05',
			'86 560 000',
			'1,4',
			'21 978,95',
			'0,674',
			'93,1',
			'18,2‰',
			'71,9 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/2/28/Bandeira_da_Bahia.svg" alt="Bandeira da Bahia ">',
			'Bahia',
			'BA',
			'Salvador',
			'564 692,7',
			'15 150 143',
			'24,46',
			'245 025 000',
			'4,1',
			'16 115,89',
			'0,660',
			'87%',
			'17,3‰',
			'73,5 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/2/2e/Bandeira_do_Ceará.svg" alt="Bandeira do Ceará ">',
			'Ceará',
			'CE',
			'Fortaleza',
			'148 825,6',
			'8 867 448',
			'54,40',
			'130 621 000',
			'2,2',
			'14 669,14',
			'0,682',
			'84,8',
			'14,4‰',
			'73,8 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg" alt="Bandeira do Distrito Federal ">',
			'Distrito Federal',
			'DF',
			'Brasília',
			'5 822,1',
			'2 867 869',
			'400,73',
			'215 613 000',
			'3,6',
			'73 971,05',
			'0,824',
			'97,4%',
			'10,5‰',
			'78,8 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/4/43/Bandeira_do_Espírito_Santo.svg" alt="Bandeira do Espirito Santo ">',
			'Espirito Santo',
			'ES',
			'Vitótia', 								
			'46 077,5',
			'3 894 899',
			'73,97',
			'120 363 000',
			'2',
			'30 627,45',
			'0,740',
			'93,8%',
			'8,8‰',
			'78,2 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Flag_of_Goiás.svg" alt="Bandeira do Goiás ">',
			'Goiás',
			'GO',
			'Goiania',
			'340 086,7',
			'6 551 322',
			'16,52',
			'173 632 000',
			'2,9',
			'26 265,32',
			'0,735',
			'93,5%',
			'14,9‰',
			'74,2 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/4/45/Bandeira_do_Maranhão.svg" alt="Bandeira do Maranhão ">',
			'Maranhão',
			'MA',
			'São Luís', 							
			'331 983,3',
			'6 861 924',
			'18,38',
			'78 475 000',
			'1,3',
			'11 366,23',
			'0,639',
			'83,3%',
			'21,3‰',
			'70,6 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/0/0b/Bandeira_de_Mato_Grosso.svg" alt="Bandeira do Mato Grosso ">',
			'Mato Grosso',												
			'MT',
			'Cuiabá',
			'903 357,9',
			'3 236 578',
			'3,10',
			'107 418 000',
			'1,8',
			'32 894,96',
			'0,725',
			'93,5%',
			'16,9‰',
			'74,2 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul ">',
			'Mato Grosso do Sul',
			'MS',
			'Campo Grande',
			'357 125,0',
			'2 630 098',
			'6,34	',
			'83 082 000',
			'1,4',
			'31 337,22',
			'0,729',
			'93,7%',
			'14,0‰',
			'75,5 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/f/f4/Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais ">',
			'Minas Gerais',
			'MG',
			'Belo Horizonte',							
			'586 528,3',
			'20 777 672',
			'32,79',
			'519 326 000',
			'8,7',
			'24 884,94',
			'0,731',
			'93,8%',
			'10,9‰',
			'77,2 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/0/02/Bandeira_do_Pará.svg" alt="Bandeira do Pará ">',
			'Pará',
			'PA',
			'Belém',								
			'1 247 689,5',
			'8 101 180',
			'5,58',
			'130 883 000',
			'2,2',
			'16 009,98',
			'0,646',
			'90,7%',
			'16,6‰',
			'72,1 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/b/bb/Bandeira_da_Paraíba.svg" alt="Bandeira da Paraíba ">',
			'Paraíba',
			'PB',
			'João Pessoa', 									
			'56 439,8',
			'3 950 359',
			'63,71',
			'56 140 000',
			'0,9',
			'14 133,32',
			'0,658',
			'83,7%',
			'16,1‰',
			'73,2 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/9/93/Bandeira_do_Paraná.svg" alt="Bandeira do Paraná">',
			'Paraná',
			'PR',
			'Curitiba',									
			'199 314,9',
			'11 112 062',
			'51,48',
			'376 960 000',
			'6,3',
			'33 768,62',
			'0,749',
			'95,5%',
			'9,3‰',
			'77,1 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/5/59/Bandeira_de_Pernambuco.svg" alt="Bandeira de Pernambuco ">',
			'Pernambuco',
			'PE',
			'Recife', 									
			'98 311,6',
			'9 297 861',
			'85,58',
			'156 955 000',
			'2,6',
			'16 795,34',
			'0,673',
			'87,2%',
			'12,7‰',
			'73,9 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/3/33/Bandeira_do_Piauí.svg" alt="Bandeira do Piauí ">',
			'Piauí',
			'PI',
			'Teresina',
			'251 529,2',
			'3 198 185',
			'11,95',
			'39 148 000',
			'0,7',
			'12 218,51',
			'0,646',
			'82,8%',
			'19,1‰',
			'71,1 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg" alt="Bandeira do Rio de Janeiro ">',
			'Rio de Janeiro',
			'RJ',
			'Rio de Janeiro	',
			'43 696,1',
			'16 497 395',
			'352,05',
			'659 137 000',
			'11',
			'39 826,95',
			'0,761',
			'97,3%',
			'11,5‰',
			'76,2 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/3/30/Bandeira_do_Rio_Grande_do_Norte.svg" alt="Bandeira do Rio Grande do Norte ">',
			'Rio Grande do Norte',
			'RN',
			'Natal',
			'52 796,8',
			'3 419 550',
			'56,88',
			'57 250 000',
			'1',
			'16 631,86',
			'0,684',
			'85,3%',
			'14,7‰',
			'75,7 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Bandeira_do_Rio_Grande_do_Sul.svg" alt="Bandeira do Rio Grande Do Sul">',
			'Rio Grande do Sul',
			'RS',
			'Porto Alegre',
			'281 748,5',
			'11 228 091',
			'38,49',
			'381 985 000',
			'6,4',
			'33 960,36',
			'0,746',
			'96,8%',
			'9,6‰',
			'77,8 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/f/fa/Bandeira_de_Rondônia.svg" alt="Bandeira de Rondônia ">',
			'Rondônia',
			'RO',
			'Porto Velho',
			'237 576,2',
			'1 755 015',
			'6,46',
			'36 563 000',
			'0,6',
			'20 677,95',
			'0,690',
			'93,3%',
			'20,0‰',
			'71,3 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/9/98/Bandeira_de_Roraima.svg" alt="Bandeira de Roraima ">',
			'Roraima',
			'RR',
			'Boa Vista',
			'224 299,0',
			'500 826',
			'1,74',
			'10 354 000',
			'0,2',
			'20 476,71',
			'0,707',
			'93,4%',
			'17,2‰',
			'71,5 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Bandeira_de_Santa_Catarina.svg" alt="Bandeira de Santa Catarina ">',
			'Santa Catarina',
			'SC',
			'Florianópolis',
			'95 346,2',
			'6 734 568',
			'61,53',
			'249 073 000',
			'4,2',
			'36 525,28',
			'0,774',
			'97,2%',
			'9,2‰',
			'79,1 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/2/2b/Bandeira_do_estado_de_São_Paulo.svg" alt="Bandeira de são Paulo ">',
			'São Paulo',
			'SP',
			'São Paulo',
			'248 209,4',
			'44 169 350',
			'162,93',
			'1 939 890 000',
			'32,4',
			'43 694,68',
			'0,783',
			'97,2%',
			'9,9‰',
			'78,1 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/b/be/Bandeira_de_Sergipe.svg" alt="Bandeira de Sergipe ">',
			'Sergipe',
			'SE',
			'Aracaju',
			'21 910,3',
			'2 227 294',
			'89,81',
			'38 554 000',
			'0,6',
			'17 189,28',
			'0,665',
			'85,3%',
			'16,2‰',
			'72,7 anos'
		),
		array(
			'<img style="width:50px;" src="https://upload.wikimedia.org/wikipedia/commons/f/ff/Bandeira_do_Tocantins.svg" alt="Bandeira do Tocantins ">',
			'Tocantins',
			'TO',
			'Palmas',
			'277 620,9',
			'1 502 759',
			'4,70',
			'28 930 000',
			'0,5',
			'19 094,16',
			'0,699',
			'89,6%',
			'15,8‰',
			'73,4 anos'
		),
	);
	?>

	<table>
		<thead>
			<tr>
				<th>Bandeira</th>
				<th>Unidade Federativa</th>
				<th>Abreviação</th>
				<th>Sede de governo</th>
				<th>Área (km²)</th>
				<th class="coluna">População (2014)</th>
				<th class="coluna">Densidade (2005)</th>
				<th>PIB(2015)</th>
				<th class="coluna">% total (2015)</th>
				<th class="coluna">PIB per capita (R$) (2015)</th>
				<th>IDH (2010)</th>
				<th class="coluna">Alfabetização (2016)</th>
				<th class="coluna">Mortalidade Infantil (2016)</th>
				<th class="coluna">Expectativa de vida (2016)</th>
			</tr>
		</thead>
		<tbody>
			<?php
			// Preencher a tabela com os dados
			foreach ($estadosbr as $linha) {
				echo "<tr>";
				foreach ($linha as $valor) {
					echo "<td>$valor</td>";
				}
				echo "</tr>";
			}
			?>
		</tbody>
	</table>
</body>

</html>