<template>
  <div class="gc_slider_wrapper">
    <div class="gc_slider_img_section">
      <div class="owl-carousel owl-theme">
        <div class="item gc_main_slide1">
          <div class="gc_slider_overlay"></div>
          <div class="gc_slider_cont1_wrapper">
            <div class="gc_slider_cont1">
              <h2
                data-animation-in="fadeInDown"
                data-animation-out="animate-out fadeOutDown"
              >
                <img :src="asset + 'images/header/slider_logo.png'" alt="logo" />
              </h2>
              <h1
                data-animation-in="fadeInUp"
                data-animation-out="animate-out fadeOutDown"
              >
                We Always <span>Believe</span>
              </h1>
              <h1
                data-animation-in="fadeInUp"
                data-animation-out="animate-out fadeOutDown"
              >
                God Is <span>Above</span> All Thing’s
              </h1>
              <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">
                We Come To Serving & Believing God's Word and Spirit.
              </p>
              <ul>
                <li
                  data-animation-in="bounceInLeft"
                  data-animation-out="animate-out bounceOutLeft"
                >
                  <a href="#">DONATE</a>
                </li>
                <li
                  data-animation-in="bounceInRight"
                  data-animation-out="animate-out bounceOutRight"
                >
                  <a href="#">ABOUT US</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="item gc_main_slide2">
          <div class="gc_slider_overlay"></div>
          <div class="gc_slider_cont1_wrapper">
            <div class="gc_slider_cont1">
              <h2
                data-animation-in="fadeInDown"
                data-animation-out="animate-out fadeOutDown"
              >
                <img :src="asset + 'images/header/slider_logo.png'" alt="logo" />
              </h2>
              <h1
                data-animation-in="fadeInUp"
                data-animation-out="animate-out fadeOutDown"
              >
                We Always <span>Believe</span>
              </h1>
              <h1
                data-animation-in="fadeInUp"
                data-animation-out="animate-out fadeOutDown"
              >
                God Is <span>Above</span> All Thing’s
              </h1>
              <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">
                We Come To Serving & Believing God's Word and Spirit.
              </p>
              <ul>
                <li
                  data-animation-in="bounceInLeft"
                  data-animation-out="animate-out bounceOutLeft"
                >
                  <a href="#">DONATE</a>
                </li>
                <li
                  data-animation-in="bounceInRight"
                  data-animation-out="animate-out bounceOutRight"
                >
                  <a href="#">ABOUT US</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item gc_main_slide3">
          <div class="gc_slider_overlay"></div>
          <div class="gc_slider_cont1_wrapper">
            <div class="gc_slider_cont1">
              <h2
                data-animation-in="fadeInDown"
                data-animation-out="animate-out fadeOutDown"
              >
                <img :src="asset + 'images/header/slider_logo.png'" alt="logo" />
              </h2>
              <h1
                data-animation-in="fadeInUp"
                data-animation-out="animate-out fadeOutDown"
              >
                We Always <span>Believe</span>
              </h1>
              <h1
                data-animation-in="fadeInUp"
                data-animation-out="animate-out fadeOutDown"
              >
                God Is <span>Above</span> All Thing’s
              </h1>
              <p data-animation-in="zoomIn" data-animation-out="animate-out zoomIn">
                We Come To Serving & Believing God's Word and Spirit.
              </p>
              <ul>
                <li
                  data-animation-in="bounceInLeft"
                  data-animation-out="animate-out bounceOutLeft"
                >
                  <a href="#">DONATE</a>
                </li>
                <li
                  data-animation-in="bounceInRight"
                  data-animation-out="animate-out bounceOutRight"
                >
                  <a href="#">ABOUT US</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
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
