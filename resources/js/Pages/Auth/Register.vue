<template>
    <Header></Header> 

    <form class="container" method="POST" action="/">
        <!-- Email input -->
        <div class="form-outline mb-4">
            <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />

        </div>

        <div class="form-outline mb-4">
            <input type="" name="username" id="form2Example1" class="form-control" placeholder="Username" />

        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
            <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />

        </div>



        <!-- Submit button -->
        <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Register</button>

        <!-- Register buttons -->
        <div class="text-center">
            <p>Aleardy a member? <a href="/Auth/login">Login</a></p>



        </div>
    </form>
</template>


<!-- scripts -->
<script setup>
/**
 * imports
 */
 import Header from '@/Components/Header.vue'


</script>