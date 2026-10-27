window.addEventListener("DOMContentLoaded", () => {

    document.getElementById("nav-contact").addEventListener("click", () => {
        document.getElementById("end").scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    });
    document.getElementById("nav-skills").addEventListener("click", () => {
        document.getElementById("skills").scrollIntoView({ 
            behavior: 'smooth',
            block: 'start'
        });
    });
    document.getElementById("nav-paths").addEventListener("click", () => {
        document.getElementById("paths").scrollIntoView({ 
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
    document.getElementById("mentionsBTN").addEventListener('click', () => { window.location.href = 'index?display=mentions'; });
    document.getElementById("sourceBTN").addEventListener('click', () => { window.open('https:/'+'/'+'github.com/noaribote/Portfolio', '_blank'); });
    document.getElementById("nav-about").addEventListener("click", () => { window.scrollTo({ top: 100, behavior: 'smooth' }) });

});