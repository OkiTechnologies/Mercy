<template>
  <div class="gc_top_header_wrapper hidden-xs">
    <div class="container-fluid py-1">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="gc_left_side_warpper">
            <div class="gc_top_contect">
              <span>
                <i class="fa fa-phone icon mr-1"></i>
                <a :href="'tel:' + settings.telephone">{{ settings.telephone }}</a>
              </span>
              <span class="">
                <i class="fa fa-envelope icon mr-1"></i>
                <a :href="'mailto:' + settings.email">{{ settings.email }}</a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="et_right_side_main_warpper">
            <div class="gc_right_side_warpper">
              <ul>
                <li>
                  <div class="gc_top_socialicon">
                    <ul>
                      <li>Connect with us:</li>
                      <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
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
      asset: this.$page.props.app.asset + '/guest/',
      settings: Object
    };
  },
  mounted() {
    axios
      .get(route('api.setting.index'))
      .then((response) => (this.settings = response.data.settings));
  },
  methods: {
    setting($name) {
      // code
    }
  }
};
</script>
