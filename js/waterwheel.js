<script>
    const carousel = document.querySelector('.carousel');
    const prevBtn = document.querySelector('.carousel-btn.prev');
    const nextBtn = document.querySelector('.carousel-btn.next');

    prevBtn.addEventListener('click', () => {
      carousel.insertBefore(carousel.lastElementChild, carousel.firstElementChild);
    });

    nextBtn.addEventListener('click', () => {
      carousel.appendChild(carousel.firstElementChild);
    });

    setInterval(() => {
      carousel.appendChild(carousel.firstElementChild);
    }, 4000);
  </script>
