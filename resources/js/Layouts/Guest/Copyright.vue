<template>
  <div class="gc_bottom_footer_main_wrapper">
    <div class="container-fluid text-sm">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="gc_bottom_footer_copy_wrapper">
          Copyright © 2022 &middot; All rights reserved.
          <a :href="route('home')">{{ app.name }}</a> | Developed by:
          <a href="https://okitechnologies.com" target="_blank">Oki Technologies Ltd.</a>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="gc_bottom_footer_right_wrapper">
          <ul>
            <li><a href="#">PRIVACY POLICY</a></li>
            <li><a href="#">TERMS & CONDITIONS</a></li>
            <li><a href="#">COPYRIGHT POLICY</a></li>
          </ul>
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
