window.addEventListener("DOMContentLoaded", () => {

    document.getElementById("nav-contact").addEventListener("click", () => {
        document.getElementById("end").scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    });
    document.querySelectorAll(".nav-project").forEach(button => {
        button.addEventListener("click", () => {
            document.getElementById("projects").scrollIntoView({ 
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
    document.getElementById("nav-about").addEventListener("click", () => { window.scrollTo({ top: 100, behavior: 'smooth' }) });

});