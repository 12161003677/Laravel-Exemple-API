@extends('assinatura-contrato.index')
@section('content')
<!-- <td style="text-align: justify; font-size: 12px"> -->
@if(isset($contrato))
<br>
<table align="center">
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr align="center">
            <td valign="center">
                <h1>CONDIÇÕES GERAIS DA CÉDULA DE CRÉDITO BANCÁRIO </h1>
            </td>
        </tr>
    </tbody>
</table>
<br>
<br>
<br>


<div class="clausulas">
    <span class="p"></span>1. Na qualidade de <b>EMITENTE</b> da presente Cédula de Crédito Bancário (“CCB”), como título representativo do crédito concedido pelo <b>CREDOR</b>, indicado no item 1, do Quadro II acima, PROMETO pagar ao <b>CREDOR</b>, ou a sua ordem, o valor ora contratado, líquido, certo e exigível, na forma e prazos previstos nesta CCB, valor este demonstrado em planilha de cálculo, apurado nos termos desta CCB e de acordo com (i) as condições incluídas no “Quadro Resumo” acima; (ii) Especificações Gerais do Crédito e a legislação vigente.
    <br>
    <br>
    <span class="p"></span>1.1. Esta CCB será emitida em formato eletrônico e deverá ser assinada eletronicamente, seja digitalmente, por meio de certificado digital do ICP Brasil, nos termos da Medida Provisória n.º 2.200-2, de 24 de agosto de 2001, bem como por qualquer outro meio eletrônico, o qual confirme que o <b>EMITENTE</b> inequivocadamente exprimiu sua vontade, possuindo eficácia e legitimidade nos termos do artigo 219, caput, do Código Civil Brasileiro.
    <br>
    <br>
    <span class="p"></span>2. O <b>CREDOR</b> concede, em favor do <b>EMITENTE</b>, o crédito acima descrito, acrescido de todos os custos, tarifas e tributos abaixo especificados, dos quais o <b>EMITENTE</b> declara que aceita todos os valores incidentes e recebeu do <b>CREDOR</b> todos os esclarecimentos acerca dos mesmos.
    <br>
    <br>
    <span class="p"></span>3. O <b>EMITENTE</b> declara ter ciência que as parcelas deverão ser pagas na forma definida no item 13 e na data constante no item 9, até a data de vencimento da última parcela conforme item 11, do Quadro II, consignando que as cobranças serão efetuadas em parcelas sucessivas, na ordem cronológica de vencimento, sendo que o recebimento da parcela pelo <b>CREDOR</b> (ou o cessionário/endossatário desta Cédula) e/ou eventual agente de cobrança contratado não significará a quitação da(s) parcela(s) anterior(es).
    <br>
    <br>
    <span class="p"></span>4. Caso o emitente possua representante legal, o mesmo terá de proceder seguindo a legislação em vigor, provando sua condição de mandatário do <b>EMITENTE</b>.
    <br>
    <br>
    <span class="p"></span>5. O <b>EMITENTE</b> declara que, previamente à emissão da presente CCB, ter tomado ciência dos fluxos que compõem o Custo Efetivo Total (“CET”), e que a taxa percentual anual representa a condição vigente na data do cálculo. Para o cálculo do CET são considerados o valor do crédito concedido, o número de parcelas e a data de pagamento, a taxa de juros, os valores dos tributos incidentes sobre a operação, das tarifas e dos pagamentos a terceiros.
    <br>
    <br>
    <span class="p"></span>6. O <b>EMITENTE</b> pagará ao <b>CREDOR</b> os valores recebidos em razão desta CCB (sendo, portanto, dívida certa, líquida e exigível), acrescidos de juros capitalizados à taxa descrita no Quadro Resumo e encargos, mensalmente, na praça da sua sede, ou a sua ordem, na forma de pagamento descrita no Quadro Resumo.
    <br>
    <br>
    <span class="p"></span>6.1. Os documentos de cobrança serão enviados pelo <b>CREDOR</b> ao endereço informado no Quadro I. O não recebimento dos referidos documentos pelo <b>EMITENTE</b> não o eximirá da responsabilidade de pagar as parcelas nos exatos vencimentos.
    <br>
    <br>
    <span class="p"></span>6.2. No caso de mudança de domicilio, fica o <b>EMITENTE</b> obrigado a comunicar tal mudança ao <b>CREDOR</b>, por escrito, no prazo de 2 (dois) dias contados da mudança.
    <br>
    <br>
    <span class="p"></span>6.3. Caso o vencimento de uma parcela caia em dia em que não haja expediente bancário, este será automaticamente prorrogado para o próximo dia útil.
    <br>
    <br>
    <span class="p"></span>6.4. O <b>EMITENTE</b> renuncia à faculdade de realizar depósitos, identificados ou não, na conta corrente do <b>CREDOR</b>, sem que esta tenha expressamente autorizado e entendendo que qualquer depósito feito em desacordo com o ora estipulado não constituirá quitação e poderá ser devolvido ao <b>EMITENTE</b> quando identificado. <b>Lembre-se: (i) ao emitir esta CCB o emitente estará concordando com todas as regras aqui estabelecidas; (ii) programe-se para pagar as parcelas nas respectivas datas de vencimento, caso contrário incidirão encargos por atraso e; (iii) saldar dívidas é sempre mais importante que gerar gastos extras, logo, não faça novas dívidas antes de quitar as atuais.</b>
    <br>
    <br>
    <span class="p"></span>7. O Imposto sobre Operações de Crédito IOF, ou qualquer outro ônus fiscal que incida ou venha a incidir nessa operação, sempre na sua totalidade, será sempre de responsabilidade exclusiva do <b>EMITENTE</b>.
    <br>
    <br>
    <span class="p"></span>8. O <b>EMITENTE</b> autoriza a <b>CREDOR</b>, em caráter irrevogável e irretratável, a informar e consultar informações referentes ao(s) mesmo(s) ao/no Sistema de Central de Risco - SCR, do Banco Central do Brasil, ainda que em momento anterior à celebração desta Cédula, aos/nos bancos de dados de proteção ao crédito e às/nas Câmaras de Liquidação/Intermediação, bem como levá-la a registro, incluindo seus eventuais anexos, em quaisquer registros públicos e instituições auxiliares do mercado financeiro.
    <br>
    <br>
    <span class="p"></span>9. O <b>EMITENTE</b> tem ciência de que, a qualquer tempo, poderá efetuar a amortização ou liquidação antecipada desta CCB, sendo que o valor presente
    do pagamento antecipado será calculado com a utilização da taxa de juros pactuada no Quadro Resumo, conforme preceitua a legislação e a regulamentação vigentes, especialmente a Resolução n.º 3.516, do Conselho Monetário Nacional, de 06/12/2007 e posteriores que eventualmente a modifique.
    <br>
    <br>
    <span class="p"></span>10. Para efeitos de liquidação antecipada o sistema de amortização respeitará o modelo de incidência do ônus fiscal, sendo que o IOF da operação será calculado e cobrado sobre o valor principal da operação, assim também entendido como a somatória dos valores das parcelas, conforme preceitua a legislação e a regulamentação vigentes, sendo que no momento da liquidação antecipada de parcelas, a mesma ocorrerá da última parcela a vencer para primeira, podendo ocorrer o pagamento parcial de uma parcela.
    <br>
    <br>
    <span class="p"></span>11. Esta CCB terá o seu vencimento antecipado, independentemente de qualquer aviso, notificação ou interpelação prévia, judicial ou extrajudicial, englobando principal e acessórios, que se tornarão imediatamente exigíveis, a exclusivo critério do <b>CREDOR</b>, de acordo com o previsto em lei e nas seguintes hipóteses: <b>(i)</b> descumprimento pelo(a) <b>EMITENTE</b> de qualquer obrigação pactuada nesta CCB ou de qualquer outro contrato, Cédula de Crédito Bancário ou obrigação pactuada entre o <b>EMITENTE</b> e o <b>CREDOR</b>, especialmente inadimplência em relação a quaisquer parcelas vencidas; <b>(ii)</b> ocorrência de qualquer uma das hipóteses previstas no artigo 333 e 1.425, do Código Civil; <b>(iii)</b> se for apurada a falsidade de qualquer declaração, informação ou documento que houver sido, respectivamente, firmado, prestado ou entregue pelo(a) <b>EMITENTE</b>; <b>(iv)</b> se houver mudança no estado econômico-financeiro do(a) <b>EMITENTE</b> que, a critério do <b>CREDOR</b>, possa prejudicar a capacidade de cumprimento das obrigações ora assumidas; <b>(v)</b> Se o <b>EMITENTE</b> ceder ou transferir a terceiros os direitos e obrigações decorrentes desta CCB, sem o prévio e expresso consentimento do <b>CREDOR</b>.
    <br>
    <br>
    <span class="p"></span>12. A mora do <b>EMITENTE</b> no pagamento de quaisquer das parcelas previstas nos termos desta CCB sujeitará o <b>EMITENTE</b>, independentemente de notificação ou interpelação, judicial ou extrajudicial, aos seguintes encargos: <b>(i)</b> multa moratória equivalente a 2% (dois por cento) sobre o valor em atraso, <b>(ii)</b> juros remuneratórios computados até a data do pagamento, na forma prevista no Quadro Resumo desta Cédula; <b>(iii)</b> juros moratórios equivalentes a 1% (um por cento) ao mês, calculados de forma pro rata e capitalizadas na periodicidade prevista no Quadro Resumo IV item 17, desde a data de vencimento da obrigação, até a data de seu pagamento, sem prejuízo dos impostos que incidam ou que venham a incidir.
    <br>
    <br>
    <span class="p"></span>12.1. Serão devidas, também, todas as despesas de cobrança extrajudicial e também as custas e honorários de advogados (i) na fase extrajudicial, na ordem de 10% (dez por cento); e (ii) judicial na ordem de 20% (vinte por cento).
    <br>
    <br>
    <span class="p"></span>13. <b>O <b>EMITENTE</b> tem ciência, se for o caso, de que o atraso no pagamento de quaisquer das parcelas desta Cédula sujeitará à negativação do(s) respectivo(s) nome(s) e CPF(s)/CNPJ(s) nos Bancos de Dados de Proteção ao Crédito, observada a legislação aplicável.</b>
    <br>
    <br>
    <span class="p"></span>14. O <b>EMITENTE</b> declara estar ciente de que a presente CCB consiste em título executivo extrajudicial e representativo de dívida em dinheiro, certa, líquida e exigível, seja pela soma indicada, seja pelo saldo devedor demonstrado em planilha de cálculo emitida pelo <b>CREDOR</b>, nos termos do artigo 28, caput, da Lei 10.931/2004, cuja apresentação pelo <b>CREDOR</b> será suficiente para a exigibilidade de seu crédito, reconhecendo que os extratos da conta corrente mencionada e as planilhas de cálculo apresentadas pelo Credor (ou o cessionário/endossatário desta Cédula) fazem parte desta Cédula e que os valores deles constantes são líquidos, certos e determinados.
    <br>
    <br>
    <span class="p"></span>15. O <b>CREDOR</b> poderá endossar, ceder ou transferir, no todo ou em parte, os direitos e obrigações desta Cédula, a seu exclusivo critério, sem qualquer necessidade de comunicação prévia, bem como utilizar essa Cédula na captação de recursos financeiros, conforme estabelece as normas vigentes do Banco Central do Brasil. Em caso de endosso, cessão ou transferência desta CCB, eventual cessionário ou endossatário será responsável pelo atendimento ao <b>EMITENTE</b>.
    <br>
    <br>
    <span class="p"></span>16. O <b>CREDOR</b> poderá emitir Certificados de Cédula de Crédito Bancário com lastro na presente CCB, podendo negociá-los livremente no mercado, tudo em conformidade com os artigos 43 e 44 da Lei nº 10.931, de 02 de agosto de 2004, e com as normas emanadas do Conselho Monetário Nacional e do Banco Central.
    <br>
    <br>
    <span class="p"></span>17. Todas as alterações a esta CCB deverão ser efetivadas por escrito, via digital/eletrônica, através de aditamentos acordados mutuamente. A eventual tolerância ou omissão por parte do <b>CREDOR</b> no exercício de qualquer direito que lhe for conferido não importará em alteração ou novação, nem os impedirá de exercer, a qualquer momento, todos os direitos que lhe são assegurados nesta CCB ou pela lei.
    <br>
    <br>
    <span class="p"></span>18. Resolução COAF nº 16/07, art. 1º, § 1º, no artigo 3º da Deliberação COERME nº2/06 e na Circular BACEN nº 3.461/09 e 3.978/2020, bem como as normas aplicáveis da CVM, Instrução CVM nº 463/08 – Consideram-se pessoas politicamente expostas aquela que desempenha ou tenha desempenhado, nos
    últimos 5 (cinco) anos, cargos, empregos ou funções públicas relevantes, ligados aos Poderes Executivo, Legislativo ou Judiciários, no Brasil ou em outros países, territórios e dependências estrangeiros, assim como seus representantes, familiares na linha direta até o segundo grau, cônjuge, companheiro (a), enteado (a) e outras pessoas de seu relacionamento próximo, estreito colaborador.
    <br>
    <br>
    <span class="p"></span>Sou Pessoa Politicamente Exposta? (<?= !$politicamente_exposto ? ' ' : 'X' ?>) Sim (<?= $politicamente_exposto ? ' ' : 'X' ?>) Não Cargo/Função: <?= $cargo_politico ?? '' ?><br>
    <span class="p"></span>Possuo Parentes Politicamente Expostos? (<?= !$parente_politicamente_exposto ? ' ' : 'X' ?>) Sim (<?= $parente_politicamente_exposto ? ' ' : 'X' ?>) Não Cargo/Função: <?= $cargo_parente_politico ?? '' ?>
    <br>
    <br>
    <span class="p"></span>19. O <b>EMITENTE</b> declara serem verdadeiras todas as informações aqui prestadas e se compromete a informar, por escrito, no prazo máximo de 10 (dez) dias, sempre que houver qualquer alteração, remetendo, inclusive, os respectivos documentos comprobatórios de tais alterações.
    <br>
    <br>
    <span class="p"></span>20. O <b>EMITENTE</b> autoriza ao <b>CREDOR</b> a verificar os dados constantes no cadastro e fornecer ao Banco Central do Brasil, ao Conselho de Controle de Atividades Financeiras, à Comissão de Valores Mobiliários, à Receita Federal a qualquer tempo, informações relativas a seus dados cadastrais, saldos e movimentações financeiras.
    <br>
    <br>
    <span class="p"></span>21. Estando as partes, <b>EMITENTE</b> e <b>CREDOR</b>, imbuídas da boa-fé necessária a presente contratação, declaram: <b>(i)</b> que a presente contratação não apresentou vício de consentimento e espelha fielmente tudo o que foi ajustado e que tiveram conhecimento prévio do seu conteúdo, sendo que entenderam perfeitamente todas as disposições nela contidas; <b>(ii)</b> que são conhecedoras da regra contida no artigo 157 do Código Civil Brasileiro (lesão de direitos), não caracterizando a presente contratação qualquer fato ou obrigação que possa ser caracterizado como lesão; <b>(iii)</b> que não se encontram em estado de perigo; (iv) que as prestações assumidas são reconhecidas como manifestamente proporcionais e que elas estão dentro de suas condições econômico/financeiras; <b>(v)</b> que guardarão na execução deste instrumento os princípios da probidade e da boafé, presentes também na sua negociação e na sua celebração; <b>(vi)</b> que este instrumento é firmado com estrita observância dos princípios indicados nas alíneas precedentes, não importando em qualquer caso em abuso de direitos; e <b>(vii)</b> que estão cientes de todas as circunstâncias e regras que norteiam o presente negócio jurídico e detêm experiência nas atividades e obrigações que lhe competem por força deste instrumento.
    <br>
    <br>
    <span class="p"></span>22. O <b>EMITENTE</b> autoriza ao <b>CREDOR</b> a gravar todas as comunicações telefônicas e, adicionalmente, reconhece e aceita que tais gravações sejam apresentadas como provas legítimas em ações e processos.
    <br>
    <br>
    <span class="p"></span>23. Estou ciente de que a contratação do Seguro de Proteção Financeira é opcional e deve ocorrer única e exclusivamente de minha livre e espontânea
    vontade de obter proteção oferecida pelo referido seguro. Na hipótese de eu contratar o Seguro Proteção Financeira, a indenização por morte, invalidez permanente total por acidente, incapacidade física total temporária ou desemprego involuntário será destinada única e exclusivamente para a cobertura de eventual saldo devedor, total ou parcial, desta Cédula, dentro dos limites estabelecidos na apólice do seguro.
    <br>
    <br>
    <span class="p"></span>24. Outorgo, neste ato, de forma irrevogável e irretratável, os poderes necessários ao <b>CREDOR</b> (ou o cessionário/endossatário desta Cédula) e/ou o eventual agente de cobrança contratado para o recebimento do seguro. O valor recebido por meio de seguro deverá ser única e exclusivamente utilizado para a liquidação do saldo devedor da presente Cédula e, caso o valor da referida indenização do seguro não seja suficiente para liquidar o saldo devedor, estou ciente que deverei pagar o saldo remanescente, considerando o disposto no item 6 e8 acima. Caso a indenização do seguro seja suficiente para quitar o saldo devedor, o valor que sobejar será devolvido para o segurado ou seus beneficiários, conforme as condições da apólice.
    <br>
    <br>
    <span class="p"></span>25. As procurações, por instrumento particular e por instrumento público, somente serão consideradas como revogadas ou canceladas, para todos os efeitos, a partir do recebimento pelo <b>CREDOR</b> de comunicação escrita do(s) Cliente(s), ficando o <b>CREDOR</b>, na falta da mesma, isenta de qualquer responsabilidade.
    <br>
    <br>
    <span class="p"></span>26. Constitui condição suspensiva para a eficácia desta CCB, nos termos do artigo 125 do Código Civil, a aprovação dos documentos e informações cadastrais do <b>EMITENTE</b> pelo <b>CREDOR</b>, no prazo de até 2 (dois) dias contados da emissão desta Cédula (“Condição Suspensiva”).
    <br>
    <br>
    <span class="p"></span>27. Na hipótese de a condição suspensiva não ocorrer em até 2 (dois) dias após a emissão desta Cédula, a presente Cédula não será mais revestida de eficácia e se extinguirá de pleno direito, sem qualquer ônus ou penalidade para qualquer das partes.
    <br>
    <br>
    <span class="p"></span>28. Declaro que estou ciente que o presente Contrato é firmado em caráter irrevogável e irretratável, vinculando, inclusive, meus herdeiros e sucessores a qualquer título, e que eventual repactuação ou cancelamento das autorizações de desconto em conta corrente, somente serão efetivadas com a expressa autorização do <b>CREDOR</b>.
    <br>
    <br>
    <span class="p"></span>29. As partes elegem o foro da cidade de Monte Belo, Estado de Minas Gerais, com exclusão de qualquer outro, por mais privilegiado que seja, para dirimir quaisquer dúvidas ou controvérsias oriundas desta CCB.
    <br>
    <br>
    <span style="float: right">Monte Belo / MG, <?= date('d', strtotime($data_geracao_proposta)) . ' de ' . $mes_geracao_proposta . ' de ' . date('Y', strtotime($data_geracao_proposta)) ?></span>
</div>

<br>
<br>


<div style="align-items: center;display: inline;">
    <h2>EMITENTE</h2><br>
    <h3><u><?= $cliente_assinatura['razao_social'] ?></u></h3>
</div>

<br>
<div>
    <h2>ASSINATURAS</h2>
</div>

<table style="font-size: 10px;">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tr align="center" valign="center">
        <td width="5%">&#x2705;</td>
        <td align="left" width="95%">
            INCLUSÃO PROPOSTA – PLATAFORMA DIGITAL ÁGIL – VIA PLATAFORMA ON LINE ÁGIL – VIA (CAMPO EDITÁVEL DA FONTE DE CAPTAÇÃO (Telefone ou via sistema on line do lojista))
        </td>
    </tr>
</table>
<table style="font-size: 10px;">
    <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tr align="center" valign="center">
        <td width="5%"><img width="20px"></td>
        <td align="left" width="95%">
            APROVAÇÃO DE PROPOSTA COBUCCIO SOCIEDADE DE CRÉDITO DIRETO S.A, NOME FANTASIA ÁGIL, CNPJ: 36.947.229/0001-85 , assinou. E-mail: credito@agil.com.br - IP :
            <?php
            if (isset($retorno->IP_Servidor)) {
                echo $retorno->IP_Servidor;
            } else echo " – ";
            ?> Hash: pendente
        </td>
    </tr>
</table>
@endif
@endsection