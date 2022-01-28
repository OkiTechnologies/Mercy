<template>
  <div class="gc_footer_main_wrapper gc_about_footer_wrapper">
    <div class="gc_footer_img_overlay"></div>
    <div class="container text-sm">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="gc_footer_logo_wrapper">
            <div class="gc_footer_logo">
              <img
                :src="asset + 'images/header/footer_logo.png'"
                class="img-responsive"
                alt="footer logo"
              />
            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="gc_footer_social_icon_wrapper">
            <div class="gc_footer_social_icon">
              <ul>
                <li>
                  <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter-square"></i> Twitter</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-google-plus-square"> Google Plus</i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-pinterest-square"></i> Pintrest</a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"> Instagram</i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="gc_footer_news_wrapper">
            <div class="gc_footer_news">
              <h3>Newsletter</h3>
              <p>Enter your email address below to start receiving our Newsletters.</p>
            </div>
            <div class="gc_footer_news_email">
              <h3>Get Our Newletter</h3>
              <input type="email" placeholder="Email" /><i class="fa fa-envelope"></i>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="gc_footer_letestnews_wrapper">
            <div class="gc_footer_news">
              <h3>Latest News</h3>
            </div>
            <div class="gc_footer_ln_main_wrapper">
              <div class="gc_footer_ln_img_wrapper">
                <img
                  :src="asset + 'images/content/footer_news1.jpg'"
                  class="img-responsive"
                  alt="ln_img"
                />
              </div>
              <div class="gc_footer_ln_cont_wrapper">
                <h4>Lord of our life & our salvation</h4>
                <p>12 May 2017</p>
              </div>
            </div>
            <div class="gc_footer_ln_main_wrapper2">
              <div class="gc_footer_ln_img_wrapper">
                <img
                  :src="asset + 'images/content/footer_news2.jpg'"
                  class="img-responsive"
                  alt="ln_img"
                />
              </div>
              <div class="gc_footer_ln_cont_wrapper">
                <h4>Lord of our life & our salvation</h4>
                <p>12 May 2017</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="gc_footer_ul_wrapper">
            <div class="gc_footer_news">
              <h3>Useful Links</h3>
            </div>
            <div class="gc_footer_ul_main_wrapper">
              <div class="gc_footer_ul_wrapper">
                <ul>
                  <li><i class="fa fa-hand-o-right"></i> <a href="#">Who we are?</a></li>
                  <li>
                    <i class="fa fa-hand-o-right"></i> <a href="#">Support and FAQ’s</a>
                  </li>
                  <li><i class="fa fa-hand-o-right"></i> <a href="#">Payments</a></li>
                  <li>
                    <i class="fa fa-hand-o-right"></i> <a href="#">Donations Trems</a>
                  </li>
                  <li><i class="fa fa-hand-o-right"></i> <a href="#">Volunteer</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="gc_footer_insta_wrapper">
            <div class="gc_footer_news">
              <h3>Instragram</h3>
            </div>
            <div class="gc_footer_insta_main_wrapper">
              <div class="gc_footer_insta_wrapper">
                <div class="row">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="gc_footer_insta_img_wrapper">
                      <img
                        :src="asset + 'images/content/footer_insta_img1.jpg'"
                        class=""
                        alt="insta_img"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="gc_footer_insta_img_wrapper">
                      <img
                        :src="asset + 'images/content/footer_insta_img2.jpg'"
                        class=""
                        alt="insta_img"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="gc_footer_insta_img_wrapper">
                      <img
                        :src="asset + 'images/content/footer_insta_img3.jpg'"
                        class=""
                        alt="insta_img"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gc_padding_top">
                    <div class="gc_footer_insta_img_wrapper">
                      <img
                        :src="asset + 'images/content/footer_insta_img4.jpg'"
                        class=""
                        alt="insta_img"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gc_padding_top">
                    <div class="gc_footer_insta_img_wrapper">
                      <img
                        :src="asset + 'images/content/footer_insta_img5.jpg'"
                        class=""
                        alt="insta_img"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 gc_padding_top">
                    <div class="gc_footer_insta_img_wrapper">
                      <img
                        :src="asset + 'images/content/footer_insta_img6.jpg'"
                        class=""
                        alt="insta_img"
                      />
                    </div>
                  </div>
                </div>
              </div>
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
      app: this.$page.props.app,
      asset: this.$page.props.app.asset + '/guest/'
    };
  }
};
</script>
