import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async (err) => {
    if (err) {
      // handle hmr errors
      console.error(err);
    }


    /**
     * Toggle Navbar
     */
    function toggleNavMenu() {
      let open = document.querySelector('.nav-burger');
      let close = document.querySelector('.nav-close');
      let sidebar = document.querySelector('.primary-navigation');
      let logo = document.querySelector('.r1-custom-logo');
      let logoBanner = document.querySelector('.page-header__custom-logo');
      let burgerButton = document.querySelector('.nav-burger');
      let closeButton = document.querySelector('.nav-close');

      if (window.innerWidth >= 960) {
        sidebar.classList.remove('hidden');
      }

      open.addEventListener('click', function (e) {
        sidebar.classList.remove('hidden');
        logoBanner.classList.remove('active');
        burgerButton.classList.add('active');
        closeButton.classList.add('open');
      });
      close.addEventListener('click', function (e) {
        sidebar.classList.add('hidden');
        logoBanner.classList.add('active');
        burgerButton.classList.remove('active');
        closeButton.classList.remove('open');
      })
      window.onresize = function () {
        if (window.innerWidth <= 960) {
          sidebar.classList.add('hidden');
          logoBanner.classList.add('active');
          burgerButton.classList.remove('active');
          closeButton.classList.remove('open');
        } else {
          sidebar.classList.remove('hidden');
          logoBanner.classList.remove('active');
          closeButton.classList.add('open');
          burgerButton.classList.add('active');
        }
      }
    }

    /**
     * down body site if wpNavbar
     */
    function marginTopIfWpAdminBar() {
      let wpAdminBar = document.getElementById('wpadminbar');
      let body = document.querySelector('body');
      let navBurger = document.querySelector('.nav-burger');
      let navClose = document.querySelector('.nav-close');

      if (body.contains(wpAdminBar)) {
        body.style.marginTop = "2rem"
        navBurger.style.top = "8rem"
        navClose.style.top = "8rem"
      }
    }

    // function scrollFunction() {
    //   let button = document.getElementById('myBtn');
    //   window.addEventListener('scroll', (event) => {
    //     let scroll = window.scrollY;
    //     console.log(scroll);
    //     if (scroll >= 20 ) {
    //       button.style.display = "block";
    //     } else {
    //       console.log('tata')
    //       button.style.display = "none";
    //     }
    //   })
    // }

    /**
     * Scroll To Top button
     */
    function topFunction() {
      let button = document.getElementById('toTop');
      let customLogo = document.querySelector('.primary-navigation > .r1-custom-logo > .r1-custom-logo__img');
      window.addEventListener('scroll', (event) => {
        let scroll = window.scrollY;
        if (scroll >= 20) {
          button.style.display = "block";
          customLogo.classList.add('scrolled');
        } else {
          button.style.display = "none";
          customLogo.classList.remove('scrolled');
        }
      })
      button.addEventListener('click', function () {
        document.documentElement.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });
    }


    /**
     * Active functions
     */
    toggleNavMenu();
    marginTopIfWpAdminBar();
    topFunction();
    AOS.init();

  }
;

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
