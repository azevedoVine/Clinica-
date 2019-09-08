var co = document.getElementById('grafico');
var c = co.getContext('2d');

c.globalCompositeOperation = 'destination-over'; //o que faz o retangulo ficar embaixo

c.beginPath();
c.lineTo(100, 50);
c.closePath();

c.globalCompositeOperation = 'source-over';

c.beginPath();
c.rect(0, 50, 500, 90);
c.fillStyle="red";
c.fill();
c.stroke();
c.closePath();

// JS MODAL
const openModalButtons = document.querySelectorAll('[data-modal-target]')
  const closeModalButtons = document.querySelectorAll('[data-close-button]')
  const overlay = document.getElementById('overlay')
  
  openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modal = document.querySelector(button.dataset.modalTarget)
      openModal(modal)
    })
  })
  
  overlay.addEventListener('click', () => {
    const modals = document.querySelectorAll('.modal.active')
    modals.forEach(modal => {
      closeModal(modal)
    })
  })
  
  closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modal = button.closest('.modal')
      closeModal(modal)
    })
  })
  
  function openModal(modal) {
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
  }
  
  function closeModal(modal) {
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
  }

 