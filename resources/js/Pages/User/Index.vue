<template>
  <app-layout title="Users">
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white _overflow-hidden shadow-xl sm:rounded-lg">
          <section class="p-3 bg-white">
            <button
              type="button"
              class="btn btn-primary"
              data-bs-toggle="modal"
              data-bs-target="#userModal"
              data-bs-whatever="Create"
            >
              Create User
            </button>

            <table class="table">
              <thead class="text-capitalize">
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Telephone</th>
                  <th>Email</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                <tr v-for="user in users.data" :key="user.id">
                  <td>{{ user.first_name }}</td>
                  <td>{{ user.last_name }}</td>
                  <td>{{ user.phone }}</td>
                  <td>{{ user.email }}</td>
                  <td class="">
                    <a class="mr-2" title="View">
                      <i class="fas fa-eye"></i>
                    </a>
                    <a
                      class="mr-2"
                      data-bs-toggle="modal"
                      data-bs-target="#userModal"
                      data-bs-whatever="Edit"
                      title="Edit"
                    >
                      <i class="fas fa-edit"></i>
                    </a>
                    <a class="mr-2 text-danger" title="Delete">
                      <i class="fas fa-trash"></i>
                    </a>
                    <div class="dropdown d-inline">
                      <a
                        class="btn btn-sm dropdown-toggle"
                        id="dropdownMenuButton2"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      ></a>
                      <ul
                        class="dropdown-menu dropdown-menu-dark"
                        aria-labelledby="dropdownMenuButton2"
                      >
                        <li>...</li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
    </div>

    <!-- User Modal -->
    <div
      class="modal fade"
      id="userModal"
      tabindex="-1"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      aria-labelledby="userModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="userModalLabel">New message</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">Recipient:</label>
                <input type="text" class="form-control" id="recipient-name" />
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label">Message:</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="button" class="btn btn-primary">Send message</button>
          </div>
        </div>
      </div>
    </div>
  </app-layout>
</template>

<script>
import { defineComponent } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import Button from '../../Jetstream/Button.vue';

export default defineComponent({
  props: ['sessions', 'users'],

  components: {
    AppLayout,
    Button
  }
});
</script>
