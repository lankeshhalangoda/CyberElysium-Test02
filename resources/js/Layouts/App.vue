<template>
    <div class="g-sidenav-show  bg-gray-100">

        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>

        <div class="min-height-300 bg-primary position-absolute w-100"></div>
        <Sidebar />
        <div class="main-content position-relative border-radius-lg ">

            <Navbar />


            <slot name="content"></slot>


            <div class="mt-5"></div>
            <Footer />
        </div>
    </div>
</template>
<script>
import Navbar from "../Components/Main/Navbar.vue";
import Sidebar from "../Components/Main/Sidebar.vue";
import Footer from "../Components/Main/Footer.vue";

export default {
    components: {
        Navbar,
        Sidebar,
        Footer,
    },
};

</script>

<style></style>
