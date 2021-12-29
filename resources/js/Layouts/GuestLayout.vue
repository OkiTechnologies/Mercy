<template>
  <div>
    <Head :title="title" />

    <div class="min-h-screen bg-gray-100">
      <!-- Page Content -->
      <main>
        <slot></slot>
      </main>
    </div>
  </div>
</template>

<script>
import { defineComponent } from 'vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

export default defineComponent({
  props: {
    title: String
  },

  components: {
    Head,
    Link
  },

  methods: {
    logout() {
      this.$inertia.post(route('logout'));
    }
  }
});
</script>
