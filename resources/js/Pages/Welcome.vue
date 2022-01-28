<template>
  <guest-layout title="Welcome">
    <gallery />

    <!-- upcoming-event /-->

    <section class="container py-2 mt-4 mb-4 shadow rounded">...welcome!</section>
  </guest-layout>
</template>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import UpcomingEvent from '../Layouts/Guest/UpcomingEvent.vue';
import Testimonies from '../Layouts/Guest/Testimonies.vue';
import Gallery from '../Layouts/Guest/Gallery.vue';

export default defineComponent({
  components: {
    Head,
    Link,
    GuestLayout,
    UpcomingEvent,
    Testimonies,
    Gallery
  },
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String
  },
  data() {
    return {
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
});
</script>
