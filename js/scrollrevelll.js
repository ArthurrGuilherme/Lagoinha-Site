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

ScrollReveal().reveal('.Ministerio01', 
    {    
        duration: 1000, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('.Ministerio02', 
    {    
        duration: 1100, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('.Ministerio03', 
    {    
        duration: 1150, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('.Ministerio04', 
    {    
        duration: 1200, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('.Ministerio05', 
    {    
        duration: 1250, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('.Ministerio06', 
    {    
        duration: 1300, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('.Ministerio07', 
    {    
        duration: 1350, reset: true, distance: '100px' , origin: 'left',
    }
);
ScrollReveal().reveal('.Ministerio08', 
    {    
        duration: 1400, reset: true, distance: '100px' , origin: 'left',
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
