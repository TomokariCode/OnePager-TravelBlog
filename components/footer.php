<?php
function renderFooter()
{
    echo '
   <footer class="footer">
       <div class="footer-content">
           <div class="icon-brandName">
               <img src="/src/icon/mountain.svg" alt="Logo" class="brand-icon-footer">
               <h1>Miles & Memories</h1>
           </div>
           <p>Mauris eu accumsan lectus. Nam eu nibh et justo condimentum pellentesque eu eu leo. Proin ullamcorper justo quis felis luctus varius.</p>
           
           <div class="links-socials-footer">
               <div class="footer-links">
                   <a href="#about">© 2024 Thinline</a>
                   <a href="#trips">Privacy Policy</a>
                   <a href="#contact">Terms of Service</a>
                   <a href="#cookies">Cookies Settings</a>
                   <a href="#design">Wedesign thinline.be</a>
               </div>
               
               <div class="footer-socials">
                   <a href="https://facebook.com" target="_blank">
                       <img src="/src/icon/facebook.svg" alt="Facebook Icon" class="social-icon">
                   </a>
                   <a href="https://instagram.com" target="_blank">
                       <img src="/src/icon/instagram.svg" alt="Instagram Icon" class="social-icon">
                   </a>
                   <a href="https://linkedin.com" target="_blank">
                       <img src="/src/icon/LinkedIn.svg" alt="LinkedIn Icon" class="social-icon">
                   </a>
               </div>
           </div>
       </div>
   </footer>
    ';
}
?>