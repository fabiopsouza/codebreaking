<!-- Content -->
<div class="row">
    <div class="col-12">
        <h2 style="color: #ce3c41">Capítulo 15 - Computadores assumem controle</h2>
        <p class="text-justify">O que é possível afirmar é que após a bomba de Turing, criptógrafos na busca por cifras cada vez mais complexa desenvolveram máquinas com Colossus, que tinha 1500 válvulas eletrônicas e era programável, fato esse que faz da Colossus o primeiro computador programável. Existe relatos que máquina Colossus não possa ser considerada como o primeiro computador da era moderno em virtude da destruição de  documentos após a II Guerra Mundial, durante décadas considerou-se que a máquina ENIAC (Electronic Numerical Integrador And Calculator ) fosse precursora do computador moderno.</p>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-4">
        <div class="text-center">
            <img src="view/static/images/colossus.jpg" alt="COLOSSUS" class="img-fluid img-thumbnail"><br>
            <small>COLOSSUS</small>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="text-center">
            <img src="view/static/images/enigma.jpg" alt="ENIGMA" class="img-fluid img-thumbnail"><br>
            <small>ENIGMA</small>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="text-center">
            <img src="view/static/images/eniac.jpg" alt="ENIAC" class="img-fluid img-thumbnail"><br>
            <small>ENIAC</small>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p class="text-justify">A utilização de computadores ao invés das máquinas mecânicas tem três principais diferenças, um computador pode ser programado para simular centenas de misturadores, com vários sentidos e ordem, é muito mais veloz e o computador mistura números ao invés de letras do alfabeto. O computador trabalha com números binários, ou seja, um sistema de numeração posicional de base 2, ao invés da conhecida base decimal, onde os números são representados por sequências formadas por apenas dois dígitos: 0 ou 1, essas são chamadas de dígitos binários, bits (binary digits, em inglês). Por exemplo, a palavra AGENT, por exemplo o computador pimeiro a traduz em forma de binário como: <code>01000001 0100011 01000101 01001110 01010100</code></p>
        <p class="text-justify">Bit é a menor unidade de informação que pode ser armazenada ou transmitida, podendo assumir dois valores: 0 ou 1. O computador é projetado para armazenar instruções em múltiplos de bit. A ASCII, American Standard Code for Information Interchange, destina que cada letra do alfabeto e cada símbolo corresponde um número binário de 7 dígitos, dando ao todo um conjunto de 128 caracteres que podem ser usados na digitação. Por exemplo e conforme a tabela 8.</p>
        <p class="text-justify">Dentro desse universo modificado pelos computadores o processo de criptografia é a seguinte, as cifras eram feitas em pares:</p>
        <div class="form-group">
            <label class="form-label">Texto original:</label>
            <code>01000001 0100011 01000101 01001110 01010100</code>
        </div>
        <div class="form-group">
            <label class="form-label">Texto original:</label>
            <code>0000010 10001011 10001010 10001101 10101000</code>
        </div>
        <p class="text-justify">Ou seja, os pares eram trocados assim para descriptografar era só destrocar os pares.</p>
        <p class="text-justify">Em 1970, Horst Feistel desenvolveu um dos algoritmos de cifragem mais usados, conhecido como Lucifer, no qual o emissor e o receptor só precisavam escolher um número para decidir qual chave seria usada. Uma versão de 56 bits da cifra Lucifer foi oficialmente adotada e batizada como Padrão de Cifragem de dados (DES–Data Encryption Standard). A DES garantia a segurança das mensagens, encorajando as empresas a utilizarem a criptografia, havia apenas um problema, a distribuição de chaves.</p>
        <p class="text-justify">Inicialmente o processo não demostrava confiabilidade, a distribuição de chaves através de meios eletrônicos trouxe muita preocupação a (DES–Data Encryption Standard), a agência tinha receio que no meio do processo a chave poderia ser interpretada, portanto, o sistema era tão forte quanto a codificação de chaves.</p>
        <p class="text-justify">Com aparecimento da internet as mensagens seriam enviadas por uma linha telefônica por isso a necessidade de criar uma criptografia forte.</p>
        <p class="text-justify">Mesmo que a mensagem não seja um segredo de Estado, a segurança dos dados é um problema de vital importância.</p>
    </div>
</div>
<div class="row">
    <div class="col-7">
        <p class="text-justify">Neste contexto surgem figuras importantes no cenário de criptografia Diffie, Hellman e Merkle ao qual propuseram um sistema de cifra baseada em uma troca de chaves de uma forma segura, onde a mensagem secreta era codificada e decodificada por duas chaves diferentes, a do remetente e a do destinatário, sem que precisassem trocá-las entre si.</p>
        <p class="text-justify">Ainda neste contexto da evolução dos computadores, os criptógrafos exploravam uma nova forma de transmitir uma mensagem de maneira indecifrável, a partir do código binário, eis que surgem Alice, Bob e Eva, que era basicamente uma sequência aleatória de zeros e uns, que seria a chave. Alice faz uma operação envolvendo sua mensagem com esta sequência aleatória, formando a mensagem cifrada que é transmitida a Bob. </p>
        <p class="text-justify">Para ilustrar a funcionalidade da criptografia Alice, Bob e Eva vamos supor que ambos vivem isolados e só podem se comunicar pelo correio. Mas sabem que o carteiro lê todas as cartas. Alice pensa em enviar a carta dentro de um cofre, fechado a cadeado. Mas como fazer a chave chegar a Bob para que ele abra o cofre? Simples: Bob recebe o cofre e fecha-o com um segundo cadeado, do qual possui a chave. Remete o cofre com os dois cadeados pelo correio. Alice remove um cadeado com sua chave e devolve o cofre. Bob só tem que utilizar sua chave para abrir seu cadeado, enquanto o carteiro fica a ver navios. Para essa prática de criptográfica deu-se o nome de cadeado duplo.</p>
    </div>
    <div class="col-5 text-center">
        <img src="view/static/images/pioneiros.jpg" alt="Figura. Os pioneiros da criptografia Ralph Merkle, Martin E. Hellman e Whitfield Diffie, 1977." class="img-fluid img-thumbnail"><br>
        <small>Figura. Os pioneiros da criptografia Ralph Merkle, Martin E. Hellman e Whitfield Diffie, 1977.</small>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p class="text-justify">Os especialistas comprovam que havendo uma sequência de números com o mesmo tamanho da mensagem, é impossível decifrá-la, desde que não se conheça a chave. No entanto, como Alice faz a chave chegar até Bob para que ele decifre a mensagem é necessário que a distribuição da chave entre as partes interessadas foi o problema surgido, observa. Alice e Bob, no caso, teriam que se encontrar para compartilhar a chave, correndo o risco de interceptação. Se Alice optasse por um mensageiro, ele bem que poderia ser subornado por Eva. Desta forma podemos dizer que esse método seria a criptografia simétrica ou de chave secreta, que funciona com o compartilhamento de uma mesma chave secreta em ambos os extremos da comunicação. A partir dessa descrição de criptografia nasce os conceitos de criptografia simétrica e assimétrica que em resumo é:</p>
        <p class="text-justify">Simétrica - Utiliza uma mesma chave tanto para cifrar como para decifrar (ou pelo menos a chave de decifração pode ser obtida trivialmente a partir da chave de cifração);</p>
        <p class="text-justify">Assimétrica - As chaves são sempre geradas aos pares: uma para cifrar e a sua correspondente para decifrar. A chave pública é divulgada, a chave privada é</p>
        <p class="text-justify">proprietária (normalmente não abandona o ambiente onde foi gerada).</p>
    </div>
</div>
<div class="row">
    <div class="col-12 col-lg-6">
        <div class="text-center">
            <img src="view/static/images/simetrica.png" alt="Simétrica" class="img-fluid img-thumbnail"><br>
            <small>Simétrica</small>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="text-center">
            <img src="view/static/images/assimetrica.png" alt="Assimétrica" class="img-fluid img-thumbnail"><br>
            <small>Assimétrica</small>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="col-12">  
					<h5>Enigma</h5>
				</div>
				<div class="col-12">
					<div class="input-group mb-3" style="max-width: 500px">
						<input type="text" class="form-control" placeholder="Mensagem Original" aria-label="Recipient's username" aria-describedby="button-addon2">
						<div class="input-group-append">
							<button class="btn btn-success" onclick="return checkPasswordChapter(16, this)" type="button" id="button-addon2">Verificar</button>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div> 