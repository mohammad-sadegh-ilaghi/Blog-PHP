<template>
    <Header></Header> 

    <form @submit.prevent="submit" method="post">
                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" id="name" v-model="form.name" />
                          <div v-if="errors.name">{{ errors.name }}</div>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email Address</label>
                        <div class="col-md-6">
                          <input type="email" class="form-control" id="email" v-model="form.email" />
                          <div v-if="errors.email">{{ errors.email }}</div>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Password</label>
                        <div class="col-md-6">
                            <input id="password" class="form-control" v-model="form.password" />
                          <div v-if="errors.password">{{ errors.password }}</div>

                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Register">
                    </div>
                    
                </form>
</template>


<!-- scripts -->
<script setup>
/**
 * imports
 */
    import Header from '@/Components/Header.vue'
    import { reactive, ref } from 'vue'
    import { router } from '@inertiajs/vue3'

  /**
   * props
   */
   defineProps({errors: Object});
   const password_confirmation = ref('');

/**
 * form 
 */
  const form = reactive({
  name: null,
  email: null,
  password:null,
  })
  /**
   * submited
   */
  function submit(){
    // if(password_confirmation != form.password){
    //     errors.password = "passwords is not match"
    // }else{
        router.post('store', form)
    // }
  }

</script>