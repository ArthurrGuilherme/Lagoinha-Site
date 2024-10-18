ScrollReveal({ reset: true });

ScrollReveal().reveal('#Card01', 
    {    
        duration: 1000, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('#Card02', 
    {    
        duration: 1200, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('#Card03', 
    {    
        duration: 1400, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('#Btn', 
    {    
        duration: 1600, reset: true, distance: '100px' , origin: 'bottom',
    }
);
ScrollReveal().reveal('#Videoimg', 
    {    
        duration: 1600, reset: true, distance: '100px' , origin: 'bottom',
    }
);
ScrollReveal().reveal('#Texto', 
    {    
        duration: 1600, reset: true, distance: '100px' , origin: 'top',
    }
);
ScrollReveal().reveal('#Titulo', 
    {    
        duration: 1000, reset: true, distance: '100px' , origin: 'top',
    }
);
ScrollReveal().reveal('#Banco', 
    {    
        duration: 1000, reset: true, distance: '100px' , origin: 'left',
    }
);
const headersecundario = document.querySelector(".Arrow");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
       headersecundario.classList.add("active");
    } else {
        headersecundario.classList.remove("active");
    }
})
