<!-- Content -->
<div class="row">
    <div class="col-12">
        <h2 style="color: #39CCCC">Capítulo 13 - Criptoanálise Computadorizada</h2>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p class="text-justify">Decifrar a Enigma garantiu a vitória da Grã-Bretanha no atlântico, mas para vencer a guerra é preciso decifrar o código mais seguro produzido pelas sofisticadas maquinas Lorenz do Alto-comando Alemão.</p>
    </div>
</div>
<div class="row">
    <div class="col-5 mx-auto d-block">
        <img src="view/static/images/lorenz.png"  alt="Lorenz" class="img-fluid img-thumbnail rounded">
    </div>
</div>

<div class="row mt-3">
    <div class="col-12 col-md-12">
        
        <h5 style="color: #39CCCC">Tunny</h5>
        <p class="text-justify">Os britânicos deram o apelido da nova máquina Lorenz de Tunny, enquanto a enigma produzia textos cifrados entregue por radio, a maquina Lorenz fazia todo o processo, os alemão confiavam tanto nas maquinas que enviavam tudo com texto simples sem realizar nenhuma codificação antes. Digitar uma letra na maquina era automaticamente codificada digitalmente.</p>
        <p class="text-justify">Em Bletchley Park, o criptoanalista John Tilman percebeu uma falha na cifra de Lorenz, que usava o sistema de Vernam, muito conhecida pelas decifradores, e sabendo como funciona foi possível decifrar partes das mensagens.</p>

        <h5 style="color: #39CCCC">Um erro terrível</h5>
        <p class="text-justify">Começaram a interceptar várias mensagens com o mesmo indicador, chamado de “depths” (profundezas). Então os alemães estavam enviado uma mensagem muito longa, cerca de 4 mil caracteres, então o operado pediu para enviar novamente a mensagem e o segundo operador enviou novamente a mesma mensagem, e a soma das mensagens iguais se cancelariam, enviaram esse texto cifrado para Tilman que descobriu que o inicio da mensagem começava com SPRUCHNUMBER (número da mensagem), e na segunda enviou como SPRUCHNR, abreviado, essa pequena diferença permitiu que Tilman decifrasse o texto original.</p>
        <p class="text-justify">Tilman passou a descoberta para Bill Tutte, que percebeu uma serie de repetições e apenas analisando a mensagem ele descobriu como a máquina Lorenz funcionava sem nem ver uma.</p>

        <h5 style="color: #39CCCC">Disjunção</h5>
        <p class="text-justify">No verão de 1942, Alan Turing já quase uma lenda em Bletchley Park, foi encarregado da Tunny, com lápis papel e borracha, usou o processo de Disjunção exclusiva, Turing desenhou folhas com possíveis configurações da máquina e então foi utilizando palpites para verificar se estão certos.</p>
        <p class="text-justify">Esse método, chamado de turingueria ou turinguismo, permitiu que Bleatchley Parck ler mensagens secretas assinadas pelo proprio Hitler, em 1943 durante a batalha de Kursk, as mensagens decifradas foram enviadas para os russos descrevendo todo o movimento do exército alemão. O exército vermelho conseguiu avançar quase sem oposição para Berlim e sem perceber que os britânicos tinha decifrado as mensagens da Lorenz começaram a usa-la.</p>

        <h5 style="color: #39CCCC">A testery</h5>
        <p class="text-justify">Era preciso gerenciar o alto número de mensagens decifradas em tempo de guerra, para isso criaram o grupo Testery, Max Newman, tutor de Turing, acreditou que esse serviço poderia ser feito por máquinas eletrônicas. A máquina criada foi chamada de “Heath Robison”, cartunista que desenhava máquinas incrivelmente complexas para realizar atividades simples. Porem a máquina não estava apresentando muitos problemas principalmente por causa do aquecimento.</p>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5 style="color: #39CCCC">Colossus</h5>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-8">
        <p class="text-justify">Turing chamou Tommy Flowers, da estação de correios, em 10 meses de trabalho produziram o primeiro computador digital em grande escala, protótipo Colossos Mark 1, com 1500 válvulas e por não precisa utilizar fitas, armazenava tudo eletronicamente, permitiu ler 5 mil caracteres por segundo. a versão em grande escala com 2500 válvulas ficou pronta no dia D, era 5 vezes mais rápida que a anterior lendo 25 mil caracteres por segundo, acredita que ela virou o a guerra para os Aliados, ela é comparada com o primeiro microprocessador Intel lançado 30 anos depois.</p>
        <p class="text-justify">Serviu na França na primeira guerra mundial, depois da guerra ligou-se com um grupo de espionagem onde passou 8 anos decifrando codigos. Com os cursos de treinamento ele alistava recrutas para trabalhar com espionagem de mensagens. Decifrou o código das enigma ferroviário alemão e aprendeu o básico de japonês para ajudar os americanos com o código naval JN-25. após a guerra se mudou para Washington se tornando assessor da agencia de segurança nacional.</p>
    </div>

    <div class="col-12 col-md-4">
        <img src="view/static/images/colossus.png" class="img-fluid" alt="">
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-12">
        <h5 style="color: #39CCCC">John Titlman</h5>
        <p class="text-justify">Serviu na França na primeira guerra mundial, depois da guerra ligou-se com um grupo de espionagem onde passou 8 anos decifrando códigos. Com os cursos de treinamento ele alistava recrutas para trabalhar com espionagem de mensagens. Decifrou o código das enigma ferroviário alemão e aprendeu o básico de japonês para ajudar os americanos com o código naval JN-25. após a guerra se mudou para Washington se tornando assessor da agencia de segurança nacional.</p>

        <h5 style="color: #39CCCC">Bill Tutte</h5>
        <p class="text-justify">Formado em primeiro lugar em química, mas era apaixonada por matemática, após a guerra ele produziu como tese para o doutorado a teoria algébrica dos grafos, depois em Toronto continuou a ter ideias matemáticas como o polinômio de Tutte.</p>
    </div>
</div>

<div class="row">
    <div class="mx-auto d-block">
        <img src="view/static/images/grafos.png"  alt="Lorenz" class="img-fluid img-thumbnail rounded">
    </div>
</div><br /><br /> 

<!-- Puzzle -->
<div class="row mt-3">
    <div class="col-12 col-md-10 col-lg-6">
        <div class="card">
            <div class="card-body">
				<h5>Enigma</h5>			
				
				<p class="text-justify"> Qual o nome da máquina que foi decodificada pela Colossus?</p>
				<p class="text-justify"><strong>Utilize a tabela de Vigenére para descobrir a resposta.</strong></p>
				
				<p class="text-justify">Resposta Codificada: RIVVEZ</p>
				<p class="text-justify">Chave: GUERRA</p>
				
				<img src="view/static/images/tabela_comunista.png" class="img-fluid img-thumbnail mb-3">								
									
				<p class="text-justify">Coloque aqui a mensagem traduzida.</p>
				
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Mensagem Original" aria-label="Recipient's message" aria-describedby="button-addon2">
					<div class="input-group-append">
						<button class="btn btn-success" onclick="return checkPasswordChapter(14, this)" type="button" id="button-addon2">Verificar</button>
						<button class="btn btn-info" onclick="return skipOnePuzzle(14, this)" type="button" id="button-addon3" title="Pular desafio"> > </button>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
