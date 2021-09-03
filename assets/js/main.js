import AOS from 'aos';
import 'aos/dist/aos.css';
import hljs from 'highlight.js';
import 'highlight.js/styles/night-owl.css';

window.addEventListener('load', function() {
    AOS.init({
        once: true
    });

    hljs.highlightAll();
});
