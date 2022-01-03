<template>
  <div class="gc_top_header_wrapper hidden-xs">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="gc_left_side_warpper">
            <div class="gc_top_contect">
              <p><i class="fa fa-phone"></i> &nbsp;+123456789</p>
              <p class="">
                <i class="fa fa-envelope"></i> &nbsp;<a href="#">Email@example.com</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
          <div class="et_right_side_main_warpper">
            <div class="gc_right_side_warpper">
              <ul>
                <li>
                  <div class="gc_top_socialicon">
                    <ul>
                      <li>Connect with Grace Church :</li>
                      <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="gc_top_donet_btn">
                    <ul>
                      <li><a href="#">DONATE</a></li>
                    </ul>
                  </div>
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
