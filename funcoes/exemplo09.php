<?php
/* Funções recursivas */

$hierarquia = array(
	array(
		'nome_cargo' => 'CEO', /* O operador básico de atribuição é "=". A sua primeira inclinação deve ser a de pensar nisto como "é igual". Não. Isto quer dizer, na verdade, que o operando da esquerda recebe o valor da expressão da direita (ou seja, "é definido para"). */

		'subordinados' =>array(
			//Início: Diretor Comercial
			array(
				'nome_cargo' => 'Diretor Comercial',
				'subordinados' =>array(
					//Início: Gerente de vendas
					array(
						'nome_cargo' => 'Gerente de Vendas'
					)
					//Termino: Gerente de Vendas
				)
			),
			//Termino: Diretor Comercial
			//Início: Diretor Financeiro
			array(
				'nome_cargo' => 'Diretor Financeiro',
				'subordinados' =>array(
					//Início: Gerente de Contas a Pagas
					array(
						'nome_cargo' => 'Gerente de Contas a Pagar',
						'subordinados' =>array(
							//Início: Supervisor de Pagamentos
							array(
								'nome_cargo' => 'Supervisor de Pagamentos'
							)

							//Termino: Supervisor de Pagamentos
						)
					),
					//Termino: Gerente de Contas a Pagar
					//Início: Gerente de Compras
					array(
						'nome_cargo' => 'Gerente de Compras',
						'subordinados' => array(
							//Início: Supervisor de Suprimentos
							array(
								'nome_cargo' => 'Supervisor de Suprimentos',
								'subordinados' => array(

									array(
										'nome_cargo' => 'Funcionário'

									)
								)
							)
							//Termino: Supervisor de Suprimentos
						)
					)
				)
			)
			//Termino: Diretor Financeiro
		)
	)
);

function exibe($cargos){

	$html = '<ul>'; /* <ul> (ou elemento HTML de Lista desordenada) representa uma lista de itens sem ordem rígida, isto é, uma coleção de itens que não trazem uma ordenação numérica e as suas posições, nessa lista, são irrelevantes. */

	foreach ($cargos as $cargo) {
		
		$html .= "<li>"; /* O elemento HTML <li>  (ou a Lista dos Itens de um elemento HTML) é usado para representar um item que faz parte de uma lista. Este item deve estar contido em um elemento pai: uma lista ordenada (<ol>), uma lista desordenada (<ul>), ou um menu (<menu>) e representa uma única entidade dessa lista. */

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){ /* isset — Informa se a variável foi iniciada */ /* count — Conta o número de elementos de uma variável, ou propriedades de um objeto */

			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";
	}
	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);
?>