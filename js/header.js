// header
class MyHeader extends HTMLElement {
	connectedCallback(){
		this.innerHTML = `
		<?php if (isset($user)) : ?>
    <header>
        <div class="logo">
          <a href="/STKRHub-XAMPP/index.php">
            <h1><img src="/STKRHub-XAMPP/img/logo.png" alt="">STKR Hub</h1>
          </a>
        </div>
        
        <nav>
          <ul>
            <li><a href="/STKRHub-XAMPP/php/creation.php">Creation</a></li>
            <li><a href="/STKRHub-XAMPP/php/shop.php">Shop</a></li>
            <li><a href="/STKRHub-XAMPP/php/marketgames.php">Market Games</a></li>
            <li><a href="/STKRHub-XAMPP/php/about.php">About Us</a></li>
            <li><a href="/STKRHub-XAMPP/php/help.php">Help</a></li>
            <li><a href="/STKRHub-XAMPP/php/supportcenter.php">Support Center</a></li>
          </ul>
        </nav>

        <div class="action-bar">
          <ul>
            <li><a href="/STKRHub-XAMPP/php/cart.php">
              <div>
                <img src="/STKRHub-XAMPP/img/cart.png" alt="" class="icon">
              </div>
            </a></li>
          </ul>

          <ul>
            <li><a href="/STKRHub-XAMPP/php/notification.php">
              <div>
                <img src="/STKRHub-XAMPP/img/notification.png" alt="" class="icon">
              </div>
            </a></li>
          </ul>

          <ul>
            <li><a href="/STKRHub-XAMPP/php/profile.php">
              <div class="image-profile">
                <img src="/STKRHub-XAMPP/img/image-profile.png" alt="">
              </div>
            </a></li>
          </ul>
        </div>
      </header>
      <?php endif; ?>
		`
	}
}
customElements.define('my-header', MyHeader);
// end of header


