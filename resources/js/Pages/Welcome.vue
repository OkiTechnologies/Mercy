<template>
  <guest-layout title="Welcome">
    <div class="">
      <!-- upcoming-event /-->

      <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <a
          v-if="$page.props.user"
          :href="route('dashboard')"
          class="text-sm text-gray-700 underline"
          target="_blank"
        >
          <i class="fas fa-desktop"></i>&nbsp;Dashboard
        </a>

        <template v-else>
          <Link :href="route('login')" class="text-sm text-gray-700 underline">
            Log in
          </Link>

          <Link
            v-if="canRegister"
            :href="route('register')"
            class="ml-4 text-sm text-gray-700 underline"
          >
            Register
          </Link>
        </template>
      </div>

      <section>...welcome!</section>
    </div>
  </guest-layout>
</template>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import UpcomingEvent from '../Layouts/Guest/UpcomingEvent.vue';

export default defineComponent({
  components: {
    Head,
    Link,
    GuestLayout,
    UpcomingEvent
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String
  }
});
</script>
