// footer
class MyFootera extends HTMLElement {
	connectedCallback(){
		this.innerHTML = `
      <?php if (isset($user)) : ?>
      <footer>
      <div class="footer-container">
        
        <div class="socials">
          <ul>
            <li>
              <a href="#facebook-link">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="#instagram-link">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a href="#twitter-link">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="#youtube-link">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="main-footer">
          <div class="f-left">
            <div class="fset1">
              <ul>
                <!-- <li>Company</li> -->
                <li><a href="#aboutus">About Us</a></li>
                <li><a href="#ourservices">Our Services</a></li>
                <li><a href="#privacypolicy">Privacy Policy</a></li>
                <li><a href="#affliateprogram">Affliate Program</a></li>
              </ul>
            </div>

            <div class="fset3">
              <ul>
                <!-- <li>Online Shop</li> -->
                <li><a href="#cards">Cards</a></li>
                <li><a href="#box">Box</a></li>
                <li><a href="#templates">Templates</a></li>
                <li><a href="#dice">Dice</a></li>
                <li><a href="#spinners">Spinners</a></li>
              </ul>
            </div>

            <div class="fset3">
              <ul>
                <!-- <li>Online Shop</li> -->
                <li><a href="#boxes">Game Boxes</a></li>
                <li><a href="#boards">Game Boards</a></li>
                <li><a href="#cards">Game Cards</a></li>
                <li><a href="#dice">Dice</a></li>
                <li><a href="#rulebook">Rule Book</a></li>
              </ul>
            </div>

            <div class="fset4">
              <ul>
                <li><a href="#gamepieces">Game Pieces</a></li>
                <li><a href="#rulebook">Rule Book</a></li>
                <li><a href="#gamepieces">Game Pieces</a></li>
              </ul>
            </div>
          </div>

          <div class="f-right">
            <div class="flogo">
              
            </div>
          </div>
        </div>

        <div class="flow">
          <p>© 2023, STKR Hub. All rights reserved. Epic, Epic Games, the Epic Games logo, Fortnite, the Fortnite logo, Unreal, Unreal Engine, the Unreal Engine logo, Unreal Tournament, and the Unreal Tournament logo are trademarks or registered trademarks of Epic Games, Inc. in the United States of America and elsewhere. Other brands or product names are the trademarks of their respective owners.</p>
        </div>

        <div class="fdown">
          <ul>
            <li><a href="#termsofservice">Terms of Service</a></li>
            <li><a href="#privacypolicy">Privacy Policy</a></li>
            <li><a href="#refund">Store Refund</a></li>
          </ul>
        </div>

      </div>
    </footer>
    <?php endif; ?>
		`
	}
}
customElements.define('my-footera', MyFootera);
// end of footer