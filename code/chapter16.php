<!-- Content -->
<div class="row">
    <div class="col-12">
        <h2 style="color: #8cc43d">Capítulo 16 - O fim da decodificação que conhecemos?</h2>
        <div class="text-center">
            <img src="view/static/images/descricao1.png" alt="Descrição 1" class="img-fluid img-thumbnail"><br>
        </div>
        <p class="text-justify">A afirmação acima, é devido a maioria das pessoas utilizarem celulares, cuja câmera, microfone e sistema de GPS possam ser ligados remotamente.</p>
        <p class="text-justify">Hoje, na internet tudo é codificado e precisa de decodificação. Para tanto, as organizações sigilosas NSA e a GCHQ monitoram chamadas atrás de indícios e os pesquisadores empregam efeitos quânticos para tornar a comunicação totalmente segura.</p>
        <h5 style="color: #8cc43d">A revolução digital</h5>    
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-7">
        <p class="text-justify">Organizações sigilosas se opõem à codificação forte, alegando o perigo de criminosos e terroristas utilizarem em suas atividades nefandas, já os criptólogos, como Philip Zimmermann, acham que deveríamos valorizar nossa privacidade.</p>
        <p class="text-justify">Engenheiro de software e analista de política militar na década de 1980, Zimmermann começou a alertar para os perigos da revolução digital e a necessidade de codificação forte. Afirmou que na Era da Informação, a criptografia tem a ver com o poder político e, em particular, com as relações de poder entre o governo e povo. Ressaltou também, que no passado se o governo quisesse violar a privacidade dos cidadãos, teria que abrir cartas e grampear conversas telefônicas, porém não havia meios em grande escala para isso. Já com os e-mails, isso seria possível.</p>
        <p class="text-justify">Caberia aos criptógrafos proteger o indivíduo contra o governo que podia acompanhar movimentos da oposição, transações financeiras, comunicações, e-mails e telefonemas, utilizando-se de programas de transcrição e reconhecimento de voz.</p>
    </div>
    <div class="col-12 col-md-5 text-center">
        <img src="view/static/images/philip-zimmermann.jpg" alt="Figura 1. Philip Zimmermann" class="img-fluid img-thumbnail"><br>
        <small>Figura 1. Philip Zimmermann</small>
    </div>        
</div>
<div class="row">
    <div class="col-12">    
        <h5 style="color: #8cc43d">Pretty Good Privacy</h5>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-7">
    <p class="text-justify">Em 1991, Zimmermann escreveu o programa de codificação Pretty Good Privacy (PGP), com o preceito de que todos tinham direito à privacidade. Pois, o RSA favorecia o governo e grandes empresas com a codificação assimétrica. Então, ele inventou um modo de utilizar o RSA em computadores pessoais, onde a mensagem era criptografada com uma cifra em bloco com chave simétrica chamada Algoritmo Internacional de Codificação de Dados (IDEA). Só a chave IDEA podia ser transmitida com segurança, desse modo, foi desenvolvido o programa PGP.</p>
        <p class="text-justify">Com problema para gerar a chave, pois teria de encontrar dois números primos grandes e multiplicá-los toda vez para enviar a mensagem, ele simplificou com o fato de sacudir o mouse, o que com o movimento aleatório, geraria um conjunto randômico de chaves públicas e privadas. Essa descoberta foi incorporada ao PGP. </p>
    </div>
    <div class="col-12 col-md-5 text-center">
        <img src="view/static/images/criptografia-assimetrica.jpg" alt="Figura 2. Criptografia assimétrica – codificação" class="img-fluid img-thumbnail"><br>
        <small>Figura 2. Criptografia assimétrica – codificação</small>
    </div>
</div>
<div class="row">
    <div class="col-12">    
        <h5 style="color: #8cc43d">Assinatura eletrônica</h5>
        <p class="text-justify">As mensagens eram transmitidas com chave pública, qualquer um poderia enviar, tornando o sistema vulnerável a fraudes generalizadas. Então Diffie e Hellman, perceberam que não tinha utilidade codificar uma mensagem quando a chave para decifrá-la está disponível de modo que todos possam lê-la</p>
        <p class="text-justify">Posteriormente, Zimmermann incorporou à PGP um processo de codificação em dois estágios, conhecido como assinatura eletrônica, onde a mensagem era codificada usando a chave privada do remetente, depois o resultado era codificado com a chave pública do destinatário. Assim, só o destinatário decifrava a mensagem com sua chave primária, e depois ele decifrava o resultado com a chave pública do remetente, confirmando que realmente viera dele.</p>
        <h5 style="color: #8cc43d">A PGP e a lei</h5>
        <p class="text-justify">A partir daí, o governo americano impôs uma lei, obrigando os fabricantes de equipamento para comunicações seguras a inserir backdoor (“porta dos fundos”) em seus produtos, contornando o sistema de segurança dos computadores para que o governo possa ler mensagens cifradas.</p>
        <p class="text-justify">Para tanto, Zimmermann publicou a PGP como software livre e entre protestos, a cláusula do governo foi retirada do projeto de lei. Nisso, Zimmermann caiu sob fogo da RSA Data Security Inc. por infração de copyright. As autoridades o acusaram de tráfico de armas, já que na lei os softwares de codificação são classificados como munição e ele o exportara ao publicá-lo na internet.</p>
        <p class="text-justify">A investigação da PGP e de Zimmermann provocou debate, pois os órgãos de policiamento e segurança defendiam a necessidade de ler comunicações pessoais como prevenção em crimes e terrorismo, já os defensores de das liberdades civis diziam que todos têm direito à privacidade. Os cidadãos queriam proteção contra a espionagem das autoridades, e foram citados grampos ilegais do governo no passado. E as empresas eram favoráveis à codificação forte, para ter segurança nas transações pela internet e proteção contra hackers.</p>
        <h5 style="color: #8cc43d">Caução de chaves</h5>
        <p class="text-justify">A tentativa de acordo proposta foi o sistema de caução de chaves, onde as chaves privadas fossem guardadas com terceiros de confiança e só pudessem ser obtidas pelas autoridades, através de mandado judicial.</p>
        <p class="text-justify">A NSA criou o algoritmo Skipjack, que rodava em um chip chamado Clipper, do qual as duas partes da chave privada eram armazenadas em instituições separadas: Instituto Nacional de Padrões e Tecnologia (NIST) e Divisão de Sistemas Automáticos do Tesouro Nacional. </p>
        <p class="text-justify">Além de utilizar o Clipper em suas comunicações, o governo insistiu que as empresas envolvidas em negócios com ele, adotassem o Padrão de Codificação Caucionário. Porém, houve pouco entusiasmo, já que acreditava-se haver riscos de chaves de decodificação em causão serem obtidas por pessoas não autorizadas, ou ainda mau usadas por excesso de zelo do governo.</p>
        <p class="text-justify">Um grande problema foi a NSA desenvolver o Skipjack em segredo sem revisão por pares, logo após o lançamento, criptólogos começaram a achar furos no sistema, em seguida ele foi abandonado.</p>
        <h5 style="color: #8cc43d">Outros meios de ataque</h5>
        <p class="text-justify">Uma cifra PGP pode não ser facilmente decodificado, mas muita coisa pode ser compreendida pela análise de tráfego, de forma que se mostre muito revelador saber quem manda uma mensagem a quem. Também há o chamado ataque TEMPEST.</p>
        <ul>
            <li>Tudo o que é elétrico, gera ondas de rádio;</li>
            <li>Veículo estacionado, consegue captar mensagem não cifrada, se digitada antes de codificar;</li>
            <li>Usando o sensor de movimento do celular, o policial pode registrar os toques do usuário no teclado;</li>
            <li>Possibilidade de infectar o software PGP com vírus que anota as chaves privadas do usuário e as envia ao araponga (agentes policiais que gravam ilegalmente conversas telefônicas) através da internet; ou</li>
            <li>A máquina pode ser hackeada com cavalo de Troia, que dá acesso ao araponga pela porta dos fundos.</li>
        </ul>
        <p class="text-justify">Em 2013 foi descoberto que a NSA, o GCHQ e outros órgãos de informações estavam envolvidos em vigilância eletrônica em escala global, após o informante Edward Snowden vazar grande reservatório de documentos secretíssimos.</p>
        <h5 style="color: #8cc43d">Computação quântica</h5>
        <div class="text-center">
            <img src="view/static/images/descricao2.png" alt="Descrição 2" class="img-fluid img-thumbnail"><br>
        </div>
    </div>
</div>
<div class="row">    
    <div class="col-12 col-md-7">
        <p class="text-justify">Em 1985, o físico de Oxford, David Deutsch teve a ideia de usar um computador quântico para fazer vários cálculos ao mesmo tempo. Mas, foi em 1994, que o matemático Peter Shor desenvolveu o algoritmo de Shor para fatoração de inteiros, demonstrado pela primeira vez em 2001 na IBM com um computador quântico de sete qubits.</p>
        <p class="text-justify">Um consórcio que incluía o Google e a NASA, em 2013 comprou um computador quântico construído pela empresa D-Wave. Em 2016, pesquisadores construíram o primeiro computador quântico reprogramável, com cinco átomos carregados, mantidos alinhados por um campo magnético. O computador usa bits quânticos (qubits) que podem ser 1, 0 ou ambos ao mesmo tempo, num estado chamado de superposição. Pode resolver três algoritmos num único passo. Quando um computador quântico em grande escala entrar em funcionamento, nenhuma cifra convencional será segura.</p>
        <p class="text-justify">Além de decifrar códigos, os efeitos quânticos também podem ser usados para criá-los. O físico Stephen Wiesner teve a ideia de produzir notas de dinheiro com uma série de armadilhas de luz que conteriam fótons, cuja polarização corresponderia ao número de série da nota, tornando impossível falsificar o dinheiro. Porém, não havia tecnologia para produzir dinheiro quântico, então seu amigo Charles Bennet conversou a respeito com o amigo Gilles Brassard e eles perceberam que isso tinha aplicação na criptografia.</p>
        <p class="text-justify">Com dois computadores ligados por um cabo de fibra óptica, uma série de fótons polarizados poderia ser enviada pelo cabo, representando 1 e 0, dependendo da orientação: verticais, horizontais e outros ainda polarizados numa ou outra diagonal. Enquanto a mensagem é transmitida, o remetente move o filtro polarizador entre vertical e diagonal. O destinatário também gira e anota o resultado. Na sequência, o remetente diz ao destinatário que a orientação do filtro era para uma sequência aleatória de algarismos, então, o destinatário marca os que estavam corretos e o resto é descartado.</p>
        <p class="text-justify">Nesse processo, a chave fica segura, não podendo ser lida no meio do caminho. Se a linha telefônica for grampeada, descobre-se a orientação do filtro, mas não o valor do algarismo, tornando fácil o destinatário perceber se o cabo de fibra óptica for grampeado, possibilitando remetente e destinatário recomeçarem. Com isso, Bennett e Brassard conseguiram enviar uma mensagem para o outro lado do laboratório.</p>
        <p class="text-justify">A primeira transferência bancária feita com distribuição de chave quântica foi realizada em Viena, em 2004, e uma rede com 200 km de cabo padrão de fibra óptica foi ali instalada em 2010. Há outras redes quânticas em Genebra, Tóquio, Massachusetts em torno do Laboratório Nacional Los Alamos, no Novo México. Embora se acredite que sejam seguras, só podemos aguardar para ver se uma nova geração de decifradores encontrará um jeito de decodificá-las. A história de decifração sugere que sempre se dá um jeito.</p>
        <p class="text-justify">Veja o vídeo Computação quântica: https://youtu.be/u4hVKldr3OA</p>
    </div>
    <div class="col-12 col-md-5 text-center">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe width="420" height="315" class="embed-responsive-item" src="https://www.youtube.com/embed/u4hVKldr3OA" allowfullscreen></iframe>
        </div>
    </div>
</div>