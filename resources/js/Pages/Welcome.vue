<template>
  <guest-layout title="Welcome">
    <div
      class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0"
    >
      <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        <Link
          v-if="$page.props.user"
          :href="route('dashboard')"
          class="text-sm text-gray-700 underline"
        >
          <i class="fas fa-desktop"></i>&nbsp;Dashboard
        </Link>

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

export default defineComponent({
  components: {
    Head,
    Link,
    GuestLayout
  },

  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String
  }
});
</script>
