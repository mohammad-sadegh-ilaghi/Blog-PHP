<template>
    <Header title="post title" describes="describes of post"></Header>
    <article class="container  mx-4 mb-4 justify-content-end ">
        <div class="row container px-4 px-lg-5 justify-content-ceneter">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>
                        Body
                    </p>
                </div>
            </div>
            <!-- <?php if(isset($_SESSION['username']) and $post->user_id == $_SESSION['user_id']): ?> -->
            <!-- comments -->
            <div class="row justify-content-ceneter">
                <section >
                    <div class="container my-5 py-5">
                        <div class="row d-flex justify-content-end">
                            <div class="col-md-12 col-lg-10 col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-start align-items-center">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp"
                                                alt="avatar" width="60" height="60" />
                                            <div>
                                                <h6 class="fw-bold text-primary mb-1">Lily Coleman</h6>
                                                <p class="text-muted small mb-0">
                                                    Shared publicly - Jan 2020
                                                </p>
                                            </div>
                                        </div>

                                        <p class="mt-3 mb-4 pb-2">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip consequat.
                                        </p>

                                        <div class="small d-flex justify-content-start">
                                            <a href="#!" class="d-flex align-items-center me-3">
                                                <i class="far fa-thumbs-up me-2"></i>
                                                <p class="mb-0">Like</p>
                                            </a>
                                            <a href="#!" class="d-flex align-items-center me-3">
                                                <i class="far fa-comment-dots me-2"></i>
                                                <p class="mb-0">Comment</p>
                                            </a>
                                            <a href="#!" class="d-flex align-items-center me-3">
                                                <i class="fas fa-share me-2"></i>
                                                <p class="mb-0">Share</p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                                        <div class="d-flex flex-start w-100">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(19).webp"
                                                alt="avatar" width="40" height="40" />
                                            <div class="form-outline w-100">
                                                <textarea class="form-control" id="textAreaExample" rows="4"
                                                    style="background: #fff;"></textarea>
                                                <label class="form-label" for="textAreaExample">Message</label>
                                            </div>
                                        </div>
                                        <div class="float-end mt-2 pt-1">
                                            <button type="button" class="btn btn-primary btn-sm">Post comment</button>
                                            <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row mt-5 ">
                <div class="col-3 offset-3">
                    <a href="/post/update/5" class="btn btn-warning text-center">Update
                    </a>
                </div>
            </div>
            <!-- <?php endif;?> -->
        </div>
    </article>
</template>

<!-- scripts -->
<script setup>
/**
 * imports
 */
import Header from '@/Components/Header.vue'



</script>