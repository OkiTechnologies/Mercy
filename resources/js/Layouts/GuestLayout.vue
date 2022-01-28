<template>
  <div>
    <Head :title="title" />

    <div class="min-h-screen bg-gray-100">
      <Preloader />
      <TopScroll />

      <!-- Header -->
      <HeaderTop />
      <Header />

      <main>
        <slot></slot>
      </main>

      <!-- Footer & Copyright -->
      <Footer />
      <copyright />
    </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Preloader from '@/Layouts/Guest/Preloader.vue';
import TopScroll from '@/Layouts/Guest/TopScroll.vue';
import HeaderTop from '@/Layouts/Guest/HeaderTop.vue';
import Header from '@/Layouts/Guest/Header.vue';
import Slider from '@/Layouts/Guest/Slider.vue';
import UpcomingEvent from './Guest/UpcomingEvent.vue';
import Copyright from './Guest/Copyright.vue';
import Footer from './Guest/Footer.vue';

export default defineComponent({
  components: {
    Head,
    Link,
    Preloader,
    TopScroll,
    HeaderTop,
    Header,
    Slider,
    UpcomingEvent,
    Copyright,
    Footer
  },

  props: {
    title: String
  },

  data() {
    return {
      // user_id: this.$page.props.user.id,
      app: this.$page.props.app,
      asset: this.$page.props.app.asset + '/guest/'
    };
  },

  methods: {
    logout() {
      this.$inertia.post(route('logout'));
    }
  }
});
</script>
