// let items = document.querySelectorAll('.carousel .carousel-item')

// items.forEach((el) => {
//     const minPerSlide = 3
//     let next = el.nextElementSibling
//     for (var i=0; i<minPerSlide; i++) {
//         if (!next) {
//             // wrap carousel by using first child
//         	next = items[0]
//       	}
//         let cloneChild = next.cloneNode(true)
//         el.appendChild(cloneChild.children[0])
//         next = next.nextElementSibling
//     }
// })

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },

    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });