document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll(".info-section");

    const revealSection = () => {
        const scrollPosition = window.scrollY + window.innerHeight;
        sections.forEach(section => {
            if (section.getBoundingClientRect().top + window.scrollY < scrollPosition) {
                section.classList.add("show");
            }
        });
    };

    window.addEventListener("scroll", revealSection);
    revealSection(); // Trigger on load
});
