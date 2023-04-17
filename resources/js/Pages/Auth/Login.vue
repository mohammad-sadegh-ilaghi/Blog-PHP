<template>
    <Header></Header>
    <form  @submit.prevent="submit" method="post">
                    
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">

                          <input type="email" id="email" v-model="form.email">
                          <div v-if="errors.email">{{ errors.email }}</div>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                            <input id="password" v-model="form.password" />
                          <div v-if="errors.password">{{ errors.password }}</div>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                    
                </form>
</template>

<!-- scripts -->
<script setup>
/**
 * imports
 */
  import Header from '@/Components/Header.vue'
  import { reactive } from 'vue'
  import { router } from '@inertiajs/vue3'
  /**
   * props
   */
  defineProps({errors: Object});

/**
 * form 
 */
  const form = reactive({
  email: null,
  password: null,
  })
  /**
   * submit
   */
function submit(){
    router('authenticate', form)
}
  </script>