// Cursos disponíveis
const cursos = [
  { id: 1, nome: 'IA para Gestão Empresarial', preco: 150 },
  { id: 2, nome: 'IA Aplicada a Educação', preco: 350 },
  { id: 3, nome: 'IA como Ferramenta de Farketing.', preco: 650 }
];

// Carrinho de compras
const carrinho = [];

var comandoMinusculo = '';
// Informações da compra
let valorTotal = 0;


// Função para exibir mensagens no chatbot
function exibirMensagem(mensagem, tipo) {
  const chatContainer = document.getElementById('chat-container');
  const messageElement = document.createElement('p');
  messageElement.textContent = mensagem;

  if (tipo === 'user') {
    messageElement.classList.add('message-user');
  } else if (tipo === 'bot') {
    messageElement.classList.add('message-bot');
  }

  chatContainer.appendChild(messageElement);
  chatContainer.scrollTop = chatContainer.scrollHeight;
}
//função para exibir os cursos e seus precos
function mostrarCursos() {
  let listaCursos = 'Cursos disponíveis:\n\n';

  for (const curso of cursos) {
    listaCursos += `${curso.id} - ${curso.nome} - R$ ${curso.preco.toFixed(2)}\n`;
  }

  exibirMensagem(listaCursos, 'bot');
}

// Função para mostrar o resumo/total da compra
function mostrarResumoCompra() {
  let resumo = 'Carrinho de compras:\n\n';

  if (carrinho.length === 0) {
    resumo += 'Nenhum curso adicionado ao carrinho.';
  } else {
    let total = 0;
    for (const item of carrinho) {
      const curso = cursos.find(c => c.id === item.id);
      resumo += `${curso.nome} - R$ ${curso.preco.toFixed(2)}\n`;
      total += curso.preco;
    }
    resumo += '\nTotal: R$ ' + total.toFixed(2);
    valorTotal = total;
  }

  exibirMensagem(resumo, 'bot');
}

// Função para adicionar um curso ao carrinho
function adicionarAoCarrinho(cursoId) {
  const curso = cursos.find(c => c.id === cursoId);

  if (curso) {
    carrinho.push({ id: curso.id });
    exibirMensagem(`O curso "${curso.nome}" foi adicionado ao carrinho.`, 'bot');
  } else {
    exibirMensagem('Curso não encontrado.', 'bot');
  }
}

// Função para remover um curso do carrinho
function removerDoCarrinho(cursoId) {
  const index = carrinho.findIndex(item => item.id === cursoId);

  if (index !== -1) {
    const curso = cursos.find(c => c.id === cursoId);
    carrinho.splice(index, 1);
    exibirMensagem(`O curso ${curso.nome} foi removido do carrinho.`, 'bot');
  } else {
    exibirMensagem('Curso não encontrado no carrinho.', 'bot');
  }
}

// Função para processar o comando do usuário
function processarComando(comando) {
  comandoMinusculo = comando.toLowerCase();
  let email = '';
  if (comandoMinusculo === 'resumo') {
    mostrarResumoCompra();
  } else if (comandoMinusculo.startsWith('adicionar ')) {
    const cursoId = parseInt(comandoMinusculo.split(' ')[1]);
    adicionarAoCarrinho(cursoId);
  } else if (comandoMinusculo.startsWith('remover ')) {
    const cursoId = parseInt(comandoMinusculo.split(' ')[1]);
    removerDoCarrinho(cursoId);
  } else if (comandoMinusculo === 'cursos') {
    mostrarCursos();
  } else if (comandoMinusculo === 'finalizar') {
    if (carrinho.length === 0) {
      exibirMensagem('Não há cursos no carrinho para finalizar a compra.', 'bot');
      return;
    } else {
      exibirMensagem("Digite seu e-mail: ", 'bot');
    }

  } else if (comandoMinusculo.includes("@gmail.com") || comandoMinusculo.includes("@outlook.com") || comandoMinusculo.includes("@hotmail.com") ) {
    
    email = comandoMinusculo;

    var informacoesCompra = [["carrinho", carrinho.map(item => item.id)], ["total", valorTotal],["email", email]];

    exibirMensagem(`Compra finalizada!\n\n Cursos: ${informacoesCompra[0][1]}\n\n Valor total: R$ ${informacoesCompra[1][1]}.\n\n E-mail: ${informacoesCompra[2][1]}`, 'bot');


    // Enviar as informações para o servidor via AJAX
    var xhr = new XMLHttpRequest();
    var url = 'enviaremail.php'; // substituir pelo caminho do seu arquivo PHP
    var params = 'informacoesCompra=' + JSON.stringify(informacoesCompra);
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Callback de sucesso
        exibirMensagem('E-mail enviado com sucesso!', 'bot');
      } else if (xhr.readyState == 4 && xhr.status != 200) {
        // Callback de erro
        exibirMensagem('Ocorreu um erro ao enviar o e-mail.', 'bot');

      }
    };

    xhr.send(params);

    setTimeout(function () {
      exibirMensagem('Verifique seu e-mail para mais detalhes.', 'bot');
    }, 1000);

  } else {
    exibirMensagem('Comando inválido.', 'bot');
  }
}

// Função para lidar com o evento de envio do formulário
function handleFormSubmit(event) {
  event.preventDefault();
  const userInput = document.getElementById('user-input');
  const comando = userInput.value;
  exibirMensagem(comando, 'user');
  processarComando(comando);
  userInput.value = '';
}

// Adicionar o evento de envio ao formulário
const submitButton = document.getElementById('submit-button');
submitButton.addEventListener('click', handleFormSubmit);



    // Mensagem de boas-vindas
    exibirMensagem('Bem-vindo ao carrinho de compras. Digite os comandos abaixo para iniciar o chatbot', 'bot');
 $('#chat-container').append('<section class="message-bot container text-center"><ul><li class="col lit"> <strong>adicionar+ n° do curso</strong> </li><li class="col lit"> <strong>remover+ n° do curso</strong> </li><li class="col lit"> <strong>resumo</strong></li><li class="col lit"> <strong>cursos</strong></li><li class="col lit"> <strong>finalizar</strong></li></ul></section>');