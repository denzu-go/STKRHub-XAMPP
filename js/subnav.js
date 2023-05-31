// subnav
class MySubnav extends HTMLElement {
	connectedCallback(){
		this.innerHTML = `
        <div id="sub-nav">
          <nav id="nav-sub-nav">
            <ul>
              <li>
                <a href="#"
                  >Creation
                  <img src="../img/right-arrow.png" alt="" class="sub-nav-icon"
                /></a>
              </li>
              <li><a href="../php/shop.php">Shop</a></li>
              <li><a href="../php/marketgames.php">Market Games</a></li>
            </ul>
          </nav>
        </div>
		`
	}
}
customElements.define('my-subnav', MySubnav);
// end of subnav