textCode('.text-upper', 1000, 100);

function textCode(elements, time, speed) {

    document.querySelectorAll(elements).forEach(elem => {
        let code = elem.textContent;
        let origText = elem.textContent;

        function randomText() {

            let letters = elem.textContent;
            let codeText = []

            for (let i = 0; i < letters.length; i++) {

                codeText.push(code.charAt(Math.floor(Math.random() * code.length)))
                
            }
            elem.textContent = codeText.join('')
        }

        elem.addEventListener('mouseenter', e => {

            let interval = setInterval(() => {
                randomText()
            }, speed);
            setTimeout(() => {
                clearInterval(interval)
                elem.textContent = origText;
                elem.addEventListener('mouseout', e => {
                    clearInterval(interval)
                    elem.textContent = origText;
                })
            }, time);
        })
    });


}