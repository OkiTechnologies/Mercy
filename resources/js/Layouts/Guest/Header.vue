<template>
  <div class="gc_main_menu_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-xs hidden-sm">
          <div class="gc_header_wrapper">
            <div class="gc_logo">
              <a :href="route('home')">
                <img
                  :src="asset + 'images/header/logo.png'"
                  alt="Logo"
                  title="Grace Church"
                  class="img-responsive"
                />
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <div class="header-area hidden-menu-bar stick" id="sticker">
            <!-- mainmenu start -->
            <div class="gc_right_menu hidden-xs hidden-sm">
              <ul>
                <li id="search_button">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    version="1.1"
                    id="Capa_2"
                    x="0px"
                    y="0px"
                    viewBox="0 0 451 451"
                    style="enable-background: new 0 0 451 451"
                    xml:space="preserve"
                  >
                    <g>
                      <path
                        id="search"
                        d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"
                        fill="#00468c"
                      />
                    </g>
                  </svg>
                </li>
                <li>
                  <div id="search_open" class="gc_search_box">
                    <input type="text" placeholder="Search here" />
                    <button><i class="fa fa-search" aria-hidden="true"></i></button>
                  </div>
                </li>
              </ul>
            </div>
            <div class="mainmenu">
              <ul>
                <li class="has-mega gc_main_navigation">
                  <a href="#" class="gc_main_navigation"> Home</a>
                  <!-- mega menu start -->
                  <ul>
                    <li class="parent"><a :href="route('home')">Home1</a></li>
                    <li class="parent"><a href="index2.html">Home2</a></li>
                    <li class="parent"><a href="index3.html">Home3</a></li>
                  </ul>
                </li>
                <li class="has-mega gc_main_navigation">
                  <a href="#" class="gc_main_navigation"> Pages</a>
                  <!-- mega menu start -->
                  <ul>
                    <li class="parent"><a href="about.html">About</a></li>
                    <li class="parent"><a href="causes.html">Causes</a></li>
                    <li class="parent"><a href="causes_single.html">Causes Single</a></li>
                  </ul>
                </li>
                <li class="has-mega gc_main_navigation">
                  <a href="#" class="gc_main_navigation"> event</a>
                  <!-- mega menu start -->
                  <ul>
                    <li class="parent"><a href="upcoming.html">event</a></li>
                    <li class="parent"><a href="event_single.html">event Single</a></li>
                  </ul>
                </li>
                <li class="has-mega gc_main_navigation">
                  <a href="#" class="gc_main_navigation"> sermons</a>
                  <!-- mega menu start -->
                  <ul>
                    <li class="parent"><a href="sermons.html">sermons</a></li>
                    <li class="parent">
                      <a href="sermons_single.html">sermons Single</a>
                    </li>
                  </ul>
                </li>
                <li class="has-mega gc_main_navigation">
                  <a href="#" class="gc_main_navigation"> Gallery</a>
                  <!-- mega menu start -->
                  <ul>
                    <li class="parent"><a href="gallery_II.html">Gallery-II</a></li>
                    <li class="parent"><a href="gallery_III.html">Gallery-III</a></li>
                    <li class="parent"><a href="gallery_IV.html">Gallery-IV</a></li>
                  </ul>
                </li>
                <li class="has-mega gc_main_navigation">
                  <a href="#" class="gc_main_navigation"> Blog</a>
                  <!-- mega menu start -->
                  <ul>
                    <li class="parent">
                      <a href="blog_categories.html">Blog-Category</a>
                    </li>
                    <li class="parent"><a href="blog_single.html">Blog-Single</a></li>
                  </ul>
                </li>
                <li class="gc_main_navigation parent">
                  <a href="contact.html" class="gc_main_navigation">Contact Us</a>
                </li>
              </ul>
            </div>
            <!-- mainmenu end -->
            <!-- mobile menu area start -->
            <header class="mobail_menu">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-xs-6 col-sm-6">
                    <div class="gc_logo">
                      <a :href="route('home')">
                        <img
                          :src="asset + 'images/header/logo.png'"
                          alt="Logo"
                          title="Grace Church"
                        />
                      </a>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6">
                    <div class="cd-dropdown-wrapper">
                      <a class="house_toggle" href="#0">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          version="1.1"
                          id="Capa_1"
                          x="0px"
                          y="0px"
                          viewBox="0 0 31.177 31.177"
                          style="enable-background: new 0 0 31.177 31.177"
                          xml:space="preserve"
                          width="25px"
                          height="25px"
                        >
                          <g>
                            <g>
                              <path
                                class="menubar"
                                d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z"
                                fill="#00468c"
                              />
                            </g>
                            <g>
                              <path
                                class="menubar"
                                d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z"
                                fill="#00468c"
                              />
                            </g>
                            <g>
                              <path
                                class="menubar"
                                d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z"
                                fill="#00468c"
                              />
                            </g>
                            <g>
                              <path
                                class="menubar"
                                d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z"
                                fill="#00468c"
                              />
                            </g>
                            <g>
                              <path
                                class="menubar"
                                d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z"
                                fill="#00468c"
                              />
                            </g>
                          </g>
                        </svg>
                      </a>
                      <nav class="cd-dropdown">
                        <h2>
                          <a href="#">Grace <span>Church</span></a>
                        </h2>
                        <a href="#0" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                          <li>
                            <form class="cd-search">
                              <input type="search" placeholder="Search..." />
                            </form>
                          </li>
                          <li class="has-children">
                            <a href="#">Home</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                              <li class="go-back"><a href="#0">Menu</a></li>
                              <li>
                                <a :href="route('home')">Home1</a>
                              </li>
                              <!-- .has-children -->

                              <li>
                                <a href="index2.html">Home2</a>
                              </li>
                              <!-- .has-children -->
                              <li>
                                <a href="index3.html">Home3</a>
                              </li>
                              <!-- .has-children -->
                            </ul>
                            <!-- .cd-secondary-dropdown -->
                          </li>
                          <!-- .has-children -->

                          <li class="has-children">
                            <a href="#">Pages</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                              <li class="go-back"><a href="#0">Menu</a></li>
                              <li>
                                <a href="about.html">About</a>
                              </li>
                              <!-- .has-children -->

                              <li>
                                <a href="causes.html">Causes</a>
                              </li>
                              <!-- .has-children -->

                              <li>
                                <a href="causes_single.html">Causes-Single</a>
                              </li>
                              <!-- .has-children -->
                            </ul>
                            <!-- .cd-secondary-dropdown -->
                          </li>
                          <!-- .has-children -->
                          <li class="has-children">
                            <a href="#">event </a>

                            <ul class="cd-secondary-dropdown is-hidden">
                              <li class="go-back"><a href="#0">Menu</a></li>
                              <li>
                                <a href="upcoming.html">event</a>
                              </li>
                              <!-- .has-children -->

                              <li>
                                <a href="event_single.html">event single</a>
                              </li>
                              <!-- .has-children -->
                            </ul>
                            <!-- .cd-secondary-dropdown -->
                          </li>
                          <!-- .has-children -->

                          <li class="has-children">
                            <a href="#">sermons </a>

                            <ul class="cd-secondary-dropdown is-hidden">
                              <li class="go-back"><a href="#0">Menu</a></li>
                              <li>
                                <a href="sermons.html">sermons</a>
                              </li>
                              <!-- .has-children -->

                              <li>
                                <a href="sermons_single.html">sermons single</a>
                              </li>
                              <!-- .has-children -->
                            </ul>
                            <!-- .cd-secondary-dropdown -->
                          </li>
                          <!-- .has-children -->
                          <li class="has-children">
                            <a href="#">Gallery</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                              <li class="go-back"><a href="#0">Menu</a></li>
                              <li>
                                <a href="gallery_II.html">Gallery-III</a>
                              </li>
                              <!-- .has-children -->

                              <li>
                                <a href="gallery_III.html">Gallery-III</a>
                              </li>
                              <!-- .has-children -->

                              <li>
                                <a href="gallery_IV.html">Gallery-IV</a>
                              </li>
                              <!-- .has-children -->
                            </ul>
                            <!-- .cd-secondary-dropdown -->
                          </li>
                          <!-- .has-children -->
                          <li class="has-children">
                            <a href="#">Blog</a>

                            <ul class="cd-secondary-dropdown is-hidden">
                              <li class="go-back"><a href="#0">Menu</a></li>
                              <li>
                                <a href="blog_categories.html">Blog-Category</a>
                              </li>
                              <!-- .has-children -->

                              <li>
                                <a href="blog_single.html">Blog-Single</a>
                              </li>
                              <!-- .has-children -->
                            </ul>
                            <!-- .cd-secondary-dropdown -->
                          </li>
                          <!-- .has-children -->
                          <li>
                            <a href="contact.html">Contact Us</a>
                          </li>
                        </ul>
                        <!-- .cd-dropdown-content -->
                      </nav>
                      <!-- .cd-dropdown -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- .cd-dropdown-wrapper -->
            </header>
          </div>
        </div>
        <!-- mobile menu area end -->
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      asset: this.$page.props.app.asset + '/guest/'
    };
  }
};
</script>
