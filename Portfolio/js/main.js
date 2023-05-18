$(document).ready(function() {
  // Animação de digitação
  const words = ['INSPIERR', 'INOVATERR', 'DIFFERRENTIATION'];
  let currentWordIndex = 0;
  let currentLetterIndex = 0;
  let isDeleting = false;
  let typingText = document.getElementById('typing-text');

  function typeNextWord() {
    const currentWord = words[currentWordIndex];

    if (typingText) {
      if (isDeleting) {
        typingText.textContent = currentWord.substring(0, currentLetterIndex);
        currentLetterIndex--;

        if (currentLetterIndex < 0) {
          isDeleting = false;
          currentWordIndex++;

          if (currentWordIndex >= words.length) {
            currentWordIndex = 0;
          }
        }
      } else {
        typingText.textContent = currentWord.substring(0, currentLetterIndex + 1);
        currentLetterIndex++;

        if (currentLetterIndex === currentWord.length) {
          isDeleting = true;
          currentLetterIndex--;
        }
      }
    }
  }

  setInterval(typeNextWord, 300);

  // Verificar se estamos na página de loading.php
  if (window.location.href.indexOf('loading.php') > -1) {
    // Adicionar a classe de animação para iniciar o desaparecimento do logotipo
    $('.logo').addClass('animation-fade');

    // Redirecionar para a página de destino após o término da animação
    setTimeout(function() {
      window.location.href = 'index.php';
    }, 1900); // Tempo da animação em milissegundos
  }
});


$(document).ready(function() {
  $('a').click(function(e) {
    e.preventDefault();
    var href = $(this).attr('href');
    $('body').addClass('page-transition');
    setTimeout(function() {
      window.location.href = href;
    }, 500);
  });

  $(document).ready(function() {
    // Exibir em tela cheia ao clicar na imagem
    $('.grid-img').click(function() {
      var imageSrc = $(this).attr('src');
      var imageElement = $('<img>').attr('src', imageSrc).addClass('fullscreen-img');
      var closeButton = $('<button>').addClass('close-btn').html('&times;');
      var fullscreenContainer = $('<div>').addClass('fullscreen-container').append(imageElement, closeButton);
      
      $('body').append(fullscreenContainer);
      
      closeButton.click(function() {
        fullscreenContainer.remove();
        exitFullscreen();
      });
      
      if (!document.fullscreenElement) {
        document.documentElement.requestFullscreen().catch(function(err) {
          console.log(err);
        });
      }
    });
    
    // Sair do modo de tela cheia
    function exitFullscreen() {
      if (document.exitFullscreen) {
        document.exitFullscreen();
      } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
      }
    }
  });
});


