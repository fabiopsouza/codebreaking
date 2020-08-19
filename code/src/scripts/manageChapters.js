/**
 * Compara a senha inserida pelo usuario, com a senha do capítulo
 * @param {Number} numberChapter 
 * @param {HTMLElement} buttonElement Elemento do botão na página do capítulo que contém o enigma
 */
async function checkPasswordChapter(numberChapter, buttonElement){
    const userPasswordChapter = buttonElement.parentNode.parentNode.childNodes[1].value
    const chapterData = await _getDataOfAChapter(numberChapter)
    const passwordChapter = chapterData.password.toLowerCase()
    if(passwordChapter === "*") {
        if(numberChapter === 8) {
            const userPasswordChapter1 = buttonElement.parentNode.parentNode.childNodes[3].value
            localStorage.setItem('message', userPasswordChapter);
            localStorage.setItem('messageCrypt', userPasswordChapter1);
            _releaseChapter(numberChapter)
            buttonElement.parentNode.parentNode.innerHTML = ""
            _alertResult(true)
            _setChapter(numberChapter);
        }

        if(numberChapter === 9) {            
            let message = localStorage.getItem('message');
            if(message.toUpperCase() === userPasswordChapter.toUpperCase()) {
                _releaseChapter(numberChapter)
                buttonElement.parentNode.parentNode.innerHTML = ""
                _alertResult(true)
                _setChapter(numberChapter);
                localStorage.removeItem('message');
                localStorage.removeItem('messageCrypt');
            }
            else {
                _alertResult(false)
            }
        }
    }
    else if(passwordChapter === userPasswordChapter){
        _releaseChapter(numberChapter)
        buttonElement.parentNode.parentNode.innerHTML = ""
        _alertResult(true)
        _setChapter(numberChapter);
    }
    else{
        _alertResult(false)
    }
}

/**
 * Responsável por exibir todo o HTML do capítulo escolhido
 * @param {Number} numberChapter 
 * @param {Boolean} solved 
 */
function _releaseChapter(numberChapter, solved){
    const xhr = new XMLHttpRequest();
    const main = document.getElementById('main')

    // O capitulo 1 é carregado por padrao, entao verifica se passou pelo enigma
    if(numberChapter === 2) {
        $(`#chapterEnigma${numberChapter}`).html("");
    }
    
    xhr.onload = function() {
        if(this.status === 200){
            let html = xhr.responseText;
            const msg = localStorage.getItem('messageCrypt');
            if(numberChapter === 8) {
                html = html.replace('*|*', msg);
            }
            main.innerHTML += `
                <section id="section-cap${numberChapter}">
                    <div class="container" data-aos="fade-up">
                        ${html}
                    </div>
                </section>
            `
            
        }else{
            console.log('Erro no servidor :((')
        }
    }

    xhr.open('get', `chapter${numberChapter}.php?solved=${solved}`)
    xhr.send()
}

/**
 * Pega todos os dados de um capítulo escolhido (referente ao data/chapters.json)
 * @param {Number} numberChapter 
 */
async function _getDataOfAChapter(numberChapter){
    const indexChapter = numberChapter - 1
    let result = {}
    await fetch('src/data/chapters.json')
        .then(response => response.json())
        .then(response => {
            result = response.chapters[indexChapter]
        })
    return result
}

/**
 * Esconder o input de texto e o botão de envio, pertencentes ao puzzle 
 * (Função criada para adicionar futuras animações quando for necessário)
 * @param {HTMLElement} input input group que contém o campo de inserir a senha e o botão de envio
 */
function _hideInputPuzzle(input){
    input.innerHTML = ""
}

/**
 * Avisar o usuário se acertou ou se errou a senha do puzzle
 * @param {Boolean} status true se o usuário inseriu a senha corretamente, false se não
 */
function _alertResult(status){
    // const statusPositive = status === true
    // const result = statusPositive 
    //     ? "senha correta, próximo capítulo liberado!"
    //     : "senha incorreta"
        
    // alert(result)
    const type = status === true ? "success" : "error";
    const message = status === true ? "Resposta correta. Próximo capítulo liberado." : "Resposta incorreta. Tente novamente.";
    const title = status === true ? "Parabéns!" : "OPS!";
    Swal.fire(title, message, type);
}

/**
 * Grava no localStorage o capitulo que já passou
 * @param {Number} numberChapter 
 */
function _setChapter(numberChapter){
    let chapters = localStorage.getItem('chapters');
    if(chapters === null) {
        chapters = [numberChapter];
    }
    else {
        chapters = JSON.parse(chapters);
        chapters.push(numberChapter);
    }
    localStorage.setItem('chapters', JSON.stringify(chapters));
}

$(document).ready(() => {
    /**
     * Verifica se existem capitulos lidos e resolvidos     * 
     */
    let chapters = localStorage.getItem('chapters');
    if(chapters !== null) {
        chapters = JSON.parse(chapters);
        chapters.forEach((value, index) => {            
            _releaseChapter(value, (index < chapters.length-1) ? 1 : 0);
        });
    }
})