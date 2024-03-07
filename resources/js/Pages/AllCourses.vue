<script setup>
import { usePage, Link } from "@inertiajs/vue3";

import FrontendLayout from "@/Layouts/FrontendLayout.vue";

const { products } = usePage().props;
console.log(products);
</script>

<template>
    <FrontendLayout>
        <div>
            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pb-11 pt-7 bg-600">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="font-sans-serif text-primary fw-bold">
                                Course category
                            </h6>
                            <h1 class="mb-6">All Courses</h1>
                            <form class="row g-3">
                                <div class="col-sm-6 col-md-3">
                                    <label
                                        class="form-label"
                                        for="inputCategories"
                                        >Categories</label
                                    >
                                    <select
                                        class="form-select"
                                        id="inputCategories"
                                    >
                                        <option selected="selected">
                                            Web development
                                        </option>
                                        <option value="1">UX designer</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <label class="form-label" for="inputLevel"
                                        >Level</label
                                    >
                                    <select class="form-select" id="inputLevel">
                                        <option selected="selected">
                                            All Level
                                        </option>
                                        <option value="1">Level 1</option>
                                        <option value="2">Level 2</option>
                                        <option value="3">Level 3</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <label
                                        class="form-label"
                                        for="inputLanguage"
                                        >Language</label
                                    >
                                    <select
                                        class="form-select"
                                        id="inputLanguage"
                                    >
                                        <option selected="selected">
                                            English
                                        </option>
                                        <option value="1">Bangla</option>
                                        <option value="2">Hindi</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <label
                                        class="form-label"
                                        for="inputInstructor"
                                        >Instructor</label
                                    >
                                    <select
                                        class="form-select"
                                        id="inputInstructor"
                                    >
                                        <option selected="selected">
                                            All Instructor
                                        </option>
                                    </select>
                                </div>
                                <div class="col-auto z-index-2">
                                    <button
                                        class="btn btn-primary"
                                        type="submit"
                                    >
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->

            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pb-0" style="margin-top: -17rem">
                <div class="container">
                    <div class="row">
                        <div v-for="item in products" class="col-md-4 mb-4">
                            <Link
                                class="nav-link"
                                :href="route('productDetails', { id: item.id })"
                            >
                                <div class="card h-100 course-card">
                                    <img
                                        class="w-100 course-img"
                                        v-bind:src="'images/' + item.image"
                                        alt="courses"
                                    />
                                    <div class="card-body">
                                        <h5
                                            class="font-sans-serif fw-bold fs-md-0 fs-lg-1"
                                        >
                                            {{ item.name }}
                                        </h5>
                                        <p class="text-danger"> price: {{ item.price }} </p>
                                    </div>
                                </div>
                            </Link>
                        </div>
                    </div>
                </div>
                <!-- end of .container-->
            </section>
            <!-- <section> close ============================-->
            <!-- ============================================-->
        </div>
    </FrontendLayout>
</template>
