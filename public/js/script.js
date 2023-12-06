document.addEventListener('DOMContentLoaded', function () {
    const imagemExibidaTop = document.getElementById('imagemExibidaTop');
    const darkModeToggle = document.getElementById('darkModeToggle');



        function applyDarkMode() {
            const isDarkMode = localStorage.getItem('darkMode') === 'true';


            document.body.classList.toggle('dark-mode', isDarkMode);

            if(isDarkMode){
                imagemExibidaTop.src = 'assets/img/bg/sec-shape2-top-escuro.png';
            }
            else{
                imagemExibidaTop.src = 'assets/img/bg/sec-shape2-top.png';
            }


            if (darkModeToggle) {
                darkModeToggle.checked = isDarkMode;
            }
        }


        applyDarkMode();



        if (darkModeToggle) {
            darkModeToggle.addEventListener('change', function () {
                const isDarkMode = darkModeToggle.checked;
                localStorage.setItem('darkMode', isDarkMode);
                applyDarkMode();
            });
        }
});
