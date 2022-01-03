<template>
  <div id="preloader">
    <div id="status">
      <img
        :src="asset + 'images/header/preloader.gif'"
        id="preloader_image"
        alt="loader"
      />
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
