<!-- Content -->
<div class="row">
    <div class="col-12">
        <h2 style="color: #39CCCC">Capítulo 14 - Criptografia na Guerra Fria</h2>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-12">
        <p class="text-justify">Decifrar a Enigma garantiu a vitória da Grã-Bretanha no atlântico, mas para vencer a guerra é preciso decifrar o código mais seguro produzido pelas sofisticadas maquinas Lorenz do Alto-comando Alemão.</p>

        <h5 style="color: #39CCCC">Redes de espionagem</h5>
        <p class="text-justify">A Grã-Bretanha e os EUA eram aliados da União Soviética durante a guerra. A espionagem permaneceu durante toda a Segunda Guerra Mundial. Os EUA e o Reino Unido continuaram aliados, principalmente em questões de informações. Com o início da Guerra Fria, a URSS se tornou um inimigo palpável, com extensas redes de espiões do Ocidente. Os agentes empregavam códigos de uso único e e ficavam guardadas em cofres nas embaixadas. Os livros usados pelos agentes eram minúsculos e fáceis de esconder As mensagens também eram transmitidas em pulsos velocíssimos, tornando-as difíceis de detectar, mesmo com o exame constante do espectro de rádio.</p>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5 style="color: #39CCCC">Microfilme</h5>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-2">
        <div style="max-width: 180px">
            <img src="view/static/images/microfilme.png" class="img-fluid" alt="">
        </div>
    </div>

    <div class="col-12 col-md-10">
        <p class="text-justify">A redução das mensagens fotograficamente era comum para torná-las mais fáceis de esconder. Rodolph ivanovitch Abel, espião soviético nascido na Grã-Bretanha se fazia passar por artista plástico em Nova York usava microfilme “mole”. Ele podia ser espremido em lugares minúsculos, como lápis, fivelas, pilhas ou moedas ocos, que não despertariam suspeitas caso fossem encontrados.</p>
        <p class="text-justify">O jornaleiro James Bozart revelou uma fotografia minúscula com uma série de números. Bozart contou que por meio dele, a notícia chegaria ao FBI, que ampliou a imagem. Compostas por dez colunas de números, cada um deles cinco algarismos; havia 21 números na maioria das colunas. Depois de determinar que não era juma moeda usada por mágicos, o FBI tentou decifrar o código – e fracassou. Só conseguiram descobrir que os números tinham sido datilografados numa máquina de escrever de fabricação estrangeira.</p>
    </div>
</div>

<div class="row mt-3">
    <div class="mx-auto d-block">
        <div style="max-width: 400px">
            <img src="view/static/images/radio-sanyo.png"  alt="Lorenz" class="img-fluid img-thumbnail rounded">
        </div>
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 col-md-12">
        <h5 style="color: #39CCCC">Neve</h5>
        <p class="text-justify">A cifra confundiu os decodificadores do FBI era complexa. O texto original era cortado ao meio, e a segunda metade era posta antes da primeira. As letras eram substituídas por números inseridos numa tabela de cédulas vazias, usando as sete primeiras letras da palavra snegoped – “neve”. O texto era escrito horizontalmente num bloco, e as colunas transpostas. Cada linha começava uma coluna mais à direita, até resultar numa linha vazia. A linha seguinte começava sob a chave número 2.</p>

        <h5 style="color: #39CCCC">Tabelas com Células Vazias</h5>
        <p class="text-justify">Criada no século XVI, a técnica foi empregada pelos comunistas durante a Guerra Civil Espanhola. O método utilizava uma tabela e uma palavra-chave. O resto das letras do alfabeto eram colocadas nas duas linhas abaixo:</p>

        <img src="view/static/images/tabela-celulas.png" alt="Tabela Celulas" class="img-fluid">

        <p class="text-justify mt-3">Para codificar “ataque amanhã”, pega-se o identificador de um algarismo de qualquer letra do teclado e o identificador de dois algarismos – linha, depois coluna – de qualquer outra letra. Sendo: 8 27 8 20 26 18 8 12 8 7 16 8. Podem ser unidos como 827820261881287168 para confundir ainda mais o criptoanalista.</p>

        <p class="text-justify">O texto cifrado final era transcrito verticalmente. Para torna-lo ainda mais indecifrável, um número arbitrário de cinco algarismos era acrescentado ao início da disjunção da chave.</p>
    </div>
</div>
 
<!-- Puzzle -->
<div class="row mt-3">
    <div class="col-12 col-md-10 col-lg-6">
        <div class="card">
            <div class="card-body">
				<h5>Enigma</h5>			
				
				<p class="text-justify"> Usando a Tabela com células vazias, usada pelos comunistas na guerra fria, traduza a mensagem:</p>
				<p class="text-justify"><strong>Chave:</strong></p>
				
				<p class="text-justify">17 26 18 9 9 0 9 15 18</p>
				
				<img src="view/static/images/tabela_comunista.png" class="img-fluid img-thumbnail mb-3">								
									
				<p class="text-justify">Coloque aqui a mensagem traduzida.</p>
				
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Mensagem Original" aria-label="Recipient's message" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-success" onclick="return checkPasswordChapter(15, this)" type="button" id="button-addon2">Verificar</button>
						<button class="btn btn-info" onclick="return skipOnePuzzle(15, this)" type="button" id="button-addon3" title="Pular desafio"> > </button>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
