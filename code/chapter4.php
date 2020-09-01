<!-- Content -->
<div class="row">
    <div class="col-12">
        <h2 style="color: #8cc43d">Capítulo 4 - Decifrar o Indecifrável</h2>
    </div>
</div>

<div class="row mt-3 mb-3">
    <div class="col-12 col-md-8 col-lg-5">
        <img src="view/static/images/manuscrito-voynich.png" alt="Manuscrito Voynich" class="img-thumbnail rounded mx-auto d-block">
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-8">
        <p class="text-justify">A expansão das comunicações se deu no século XIX, quando os Estados Unidos dominavam um continente e a Grã-Bretanha tinha um império mundial.</p>
        <p class="text-justify">Para transmitir informações secretas a grande distância e fácil de interpretar, foi inventado o telégrafo, o que ocasionou a necessidade de novos códigos e métodos de decifração. Esse fato se deu, pela emissão de mensagens enviadas em código Morse, que era uma simples representação das letras alfabéticas em forma de pontos e traços que pulsavam curtamente ou longamente na corrente elétrica, pois necessitavam de criptografia.</p>
        <p class="text-justify">Os telégrafos de ambos os lados, podiam ler a mensagem, então mensagens privadas ou secretas deveriam ser criptografadas antes de chegar ao telegrafista, sendo a cifra de Vigenère a melhor opção e iniciada a corrida para decifrá-la.</p>
    </div>

    <div class="col-12 col-md-4">
        <img src="view/static/images/telegrafo1.jpeg" alt="Manuscrito Voynich" class="img-thumbnail rounded mx-auto d-block float-left">
    </div>
</div>

<div class="row mt-3 mt-md-0">
    <div class="col-12 col-md-6">
        <img src="view/static/images/telegrafo2.jpeg" alt="Manuscrito Voynich" class="img-thumbnail rounded mx-auto d-block">
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 col-md-12">
        <h5 style="color: #8cc43d">Charles Babbage (1791-1871)</h5>
        <p class="text-justify">Matemático que tentou construir um computador mecânico e não teve êxito, mas decodificou a letra de John Flamsteed e as anotações codificadas de Henrietta Maria, esposa de Carlos I. Em 1854, após ter afirmado que John Hall Brock Thwaites não inventou um código, que apenas fez referência à uma cifra de Vigenère, então foi desafiado a decifrar uma amostra decifrada por ele e conseguiu.</p>
        <p class="text-justify">Ele usou um método também desenvolvido pelo oficial prussiano Friedrich Wilhelm Kasiski, que notaram sequências de letras repetidas com frequência no texto cifrado de Vigenère.</p>
        <h5 style="color: #8cc43d">A Cifra de Playfair</h5>
        <p class="text-justify">A cifra criada por Charles Wheatstone, foi demonstrada em 1854 pelo Lorde Playfair em um jantar do conde Granville. Há muitas vantagens nesse sistema, tendo em vista que em qualquer mensagem o número de bigramas é metade do número de letras e há menos elementos disponíveis para decifrar com a análise de frequência. Esse sistema foi utilizado na Guerra dos Bôeres. O tenente Joseph I. Mauborgne em 1914, apontou que apesar da baixa frequência dos bigramas, esses elementos eram vulneráveis à análise de frquência. Porém, a cifra de Playfair continuou a ser usada na comunicação tática, por sua facilidade e rapidez na codificação e descodificação.</p>
        <h5 style="color: #8cc43d">As Cifras de Beale</h5>
        <p class="text-justify">Algumas cifras nunca foram decifradas, uma delas é o manuscrito de Voynich. Outra foi descrita por James B. Ward, que publicou o folheto: "Os documentos de Beale", que narra a história de documentos codificados relativos ao paradeiro de um tesouro enterrado, documentos esses deixados em uma caixa por Thomas J. Beale ao Robert Morris, propretário de um hotel em Lynchburg.  </p>
        <h5 style="color: #8cc43d">As melhores mentes dos Estados Unidos</h5>
        <p class="text-justify">O Dr. Carl Hammer, diretor de ciência da computaçãoda Sperry Univac, em 1964 trabalhou em documentos cifrados utilizando computadores da empresa e não conseguiu decifrar o código, porém sua análise da primeira folha, concluiu que ela foi codificada da mesma maneira que a segunda folha. Foi verificado verificado todos os fragmentos de registro histórico para se obter uma pista.</p>
        <p class="text-justify">Hammer se convenceu de que a criptoanálise seja a única linha de ataque frutífera e de que o código era decifrável. Ele estimou que sua tentativa de descobri-lo envolveu pelo menos 10% das melhores mentes criptoanalíticas dos Estados Unidos e que o trabalho que fizeram excedia o valor do tesouro.</p>
        <h5 style="color: #8cc43d">Roger Bacon (1220-1292)</h5>
        <p class="text-justify">O primeiro livro europeu conhecido a descrever o uso da criptografia foi escrito pelo monge franciscano e polimata inglês Roger Bacon. Grande estudioso, propôs idéias avançadas e delineou sete métodos para manter mensagens em segredo. Em certa época, acreditou-se que fosse ele o autor do manuscrito de Voynich.</p>
    </div>
</div>

<!-- Puzzle -->
<div class="row">
	<div class="col-12 col-lg-6">
		<div class="card">
			<div class="card-body">
				<div class="col-12">
					<h5>Enigma</h5>
				</div>	
				<div class="col-12 col-md-12">
					<p class="font-weight-bold">Decifre o código Morse observando a matriz abaixo.</p>
					<p class="text-justify">Mensagem escrita com Código Morse:</p>
					<img src="view/static/images/mensagem_morse.png" alt="Morse" class="img-fluid rounded">
					
					<p class="text-justify"><strong>Traduza a mensagem:</strong></p>
					
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Mensagem Traduzida" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
                            <button class="btn btn-success" onclick="return checkPasswordChapter(5, this)" type="button" id="button-addon2">Verificar</button>
                            <button class="btn btn-info" onclick="return skipOnePuzzle(5, this)" type="button" id="button-addon3" title="Pular desafio"> > </button>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-7">
					<img class="img-fluid rounded" src="view/static/images/morse.jpeg" alt="Morse">
				</div>
			</div>
		</div>
	</div>
</div>
