function updateChartContent() {
    const element = document.getElementById("setNewChartContent");
    if (!element) return;
    const sep = window.matchMedia("(max-width: 332px)").matches ? " " : "&nbsp;";
    element.innerHTML = `Un&nbsp;projet&nbsp;en${sep}tête&nbsp;?<br><em>Parlons-en.</em>`;
}

document.addEventListener("DOMContentLoaded", updateChartContent);
window.addEventListener("resize", updateChartContent);
