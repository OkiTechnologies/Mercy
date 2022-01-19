<template>
  <div>
    <Head :title="title" />

    <div class="min-h-screen bg-gray-100">
      <Preloader />
      <TopScroll />

      <TopHeader />
      <Header />

      <section>
        <slot></slot>
      </section>
    </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Preloader from '@/Layouts/Guest/Preloader.vue';
import TopScroll from '@/Layouts/Guest/TopScroll.vue';
import TopHeader from '@/Layouts/Guest/TopHeader.vue';
import Header from '@/Layouts/Guest/Header.vue';
import Slider from '@/Layouts/Guest/Slider.vue';
import UpcomingEvent from './Guest/UpcomingEvent.vue';

export default defineComponent({
  components: {
    Head,
    Link,
    Preloader,
    TopScroll,
    TopHeader,
    Header,
    Slider,
    UpcomingEvent
  },

  props: {
    title: String
  },

  data() {
    return {
      // user_id: this.$page.props.user.id,
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
