<!-- Content -->
<div class="row">
    <div class="col-12">
        <h2 style="color: #bf3fc8">Capítulo 2 - Anagramas Árabes</h2>
    </div>
</div>

<div class="row">
    <div class="col-12 col-md-8">
        <p class="text-justify">Anagrama é reconstruir um texto a partir de pistas encontradas com a análise de frequência, os estudiosos árabes foram os primeiros a descobrir a possibilidade de desvendar cifras calculando frequência de letras, não apenas isoladas, mas pares e até mesmo trios de letras.</p>

        <h5 style="color: #bf3fc8">Abu Al-khalil</h5>

        <p class="text-justify">Nasceu em Omã, deu aulas em Baçorá, durante um período foi secretário do Vizir, se convertendo para o islamismo sunita. Escreveu o "livro da letra", considerado o primeiro dicionário árabe. Há relatos que sua morte aconteceu quando estava pensando em um sistema, para que sua criada não fosse enganada, distraído caiu do pilar da mesquita.</p>
    
        <p class="text-justify">Também escreveu: livro da linguagem secreta, atualmente perdido, se interessou por cifras quando o imperador bizantino pediu para decifrar uma mensagem em grego. Al-khalil supôs que a carta devia começar com: "em nome de Deus" e com isso descobriu as primeiras letras e com elas foi decifrando o restante da mensagem.</p>
    </div>

    <div class="col-12 col-md-4">
       <div style="max-width: 450px" class="mx-auto d-block">
            <img src="view/static/images/anagram.jpeg" class="img-fluid img-thumbnail rounded" alt="">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <p class="text-justify">No seculo IX o polimata Abu Al-kindi, o "filósofo dos árabes", escreveu o manuscrito: "Da elucidação de correspondência codificada", explicando como decodificar um documento pela frequência de algumas letras, iniciando a criptoanálise sistemática.</p>

        <p class="text-justify">Letras que mais aparecem em texto em português: <a class="btn btn-sm btn-primary" href="https://www.gta.ufrj.br/grad/06_2/alexandre/criptoanalise.html">Criptoanálise</a></p>

        <div style="max-width: 450px" class="mx-auto d-block">
            <img class="img-fluid img-thumbnail rounded" src="view/static/images/qalqashandi.jpeg" alt="Qalqashandi">
        </div>

        <h5 class="mt-3" style="color: #bf3fc8">Qalqashandi</h5>

        <p class="text-justify">Em 1412 o egípcio Ahmad Al-Qalqashandi terminou a obra: "alvorada para cegos", incluindo uma seção sobre criptografia, descrevendo 7 tipos de criptografia:</p>

        <ol>
            <li>Substituir uma letra por outra;</li>
            <li>Escrever a palavra de trás para frente;</li>
            <li>Inverter letras alternadas;</li>
            <li>Usar o valor numérico das letras;</li>
            <li>Substituições múltiplas;</li>
            <li>Substituir letras por nomes;</li>
            <li>Substituir letras por símbolos;</li>
        </ol>

        <p class="text-justify">Qalqashandi defendia que a criptoanálise tem que conhecer a língua que foi escrita o criptograma. Ele identificou a frequência de letras do Corão e viu que era diferente de outros textos, então avaliou que para começar a avaliar um texto é preciso contar o número de letras e quantas vezes cada símbolo aparece, depois disso descobrir qual é o símbolo que separa as palavras, depois de ter encontrado o espaço, procurando os símbolos que mais se repetem e supondo que seja as letras que mais se repetem, e depois o segundo símbolo que mais se repete e analisando se é possível construir palavras.</p>
        <p class="text-justify">Entretanto, o método de Qalqashandi nao se espalhou rapidamente pelo mundo muçulmano, em 1600 o sultão de marrocos enviou seu secretário para negociar com a Elizabeth I da inglaterra, contra a espanha, mas o destinatário da mensagem levou 15 anos para entender a mensagem, mas se tivesse utilizado o método de Qalqashandi levaria apenas algumas horas.</p>

        <h5 style="color: #bf3fc8">Anagramantismo</h5>
        
        <p class="text-justify">Quando é deixado os espaços entre as palavras, facilita para localizar palavras com uma ou duas letras, sendo um bom início para decifrar. Reconstruir o texto original desse jeito é chamado de anagramatizar.</p>
        <p class="text-justify">Para criptografia é melhor não depender de um livro de códigos que pode ser capturado por inimigos, o melhor é decorar o método.</p>
        <p class="text-justify">Um meio de criptografia é utilizar uma palavra chave, para reescrever a ordem do alfabeto e assim misturar a mensagem, por exemplo com a palavra ENGLAND, removemos as letras que se repetem e colocamos no alfabeto:</p>

        <h6 style="color: #bf3fc8">Alfabeto comum:</h6>

        <p>abcdefghijklmnopqrstuvwxyz</p>

        <h6 style="color: #bf3fc8">Alfabeto criptografado:</h6>
        
        <p>ENGLADBCFHIJKMOPQRSTUVWXYZ</p>
        
        <p>A palavra chave não precisa estar no início, pode estar em qualquer lugar do alfabeto e apenas o destinatário e o remetente sabem qual é a palavra e a posição dela.</p>
    </div>
</div>

<!-- Puzzle -->
<div class="row">
    <div class="col-12 col-md-10 col-lg-6">
        <div class="card">
            <div class="card-body">

                <h5>Enigma</h5>

                <p class="font-weight-bold">Decifre a mensagem:</p>
                <p>6?17!0@N@L15&</p>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Mensagem Traduzida" aria-label="Mensagem Traduzida" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-success" onclick="return checkPasswordChapter(3, this)" type="button" id="button-addon2">Verificar</button>
                        <button class="btn btn-info" onclick="return skipOnePuzzle(3, this)" type="button" id="button-addon3" title="Pular desafio"> > </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>