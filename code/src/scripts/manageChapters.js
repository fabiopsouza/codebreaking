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
            _releaseChapter(numberChapter, 0)
            buttonElement.parentNode.parentNode.innerHTML = ""
            _alertResult(true)
            _setChapter(numberChapter);
        }

        if(numberChapter === 9) {            
            let message = localStorage.getItem('message');
            if(message.toUpperCase() === userPasswordChapter.toUpperCase()) {
                _releaseChapter(numberChapter, 0)
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
        _releaseChapter(numberChapter, 0)
        buttonElement.parentNode.parentNode.innerHTML = ""
        _alertResult(true)
    }else{
        _alertResult(false)
    }
}

/**
 * Responsável por exibir todo o HTML do capítulo escolhido
 * @param {Number} numberChapter 
 */
function _releaseChapter(numberChapter){
    const xhr = new XMLHttpRequest();
    const main = document.getElementById('main')
    
    xhr.onload = function() {
        if(this.status === 200){
            main.innerHTML += `
                <section id="section-cap${numberChapter}">
                    <div class="container" data-aos="fade-up">
                        ${xhr.responseText}
                    </div>
                </section>
            `
        }else{
            console.log('Erro no servidor :((')
        }
    }

    xhr.open('get', `chapter${numberChapter}.php`)
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
    const statusPositive = status === true
    const result = statusPositive 
        ? "senha correta, próximo capítulo liberado!"
        : "senha incorreta"
        
    alert(result)
}