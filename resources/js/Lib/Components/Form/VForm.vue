<template>
    <form class="" @submit.prevent="onSubmit">
        <slot></slot>
        <button class="px-8 py-2 bg-gray-300 rounded" type="submit" :disabled="disableForm">
            <slot name="button-text">Submit</slot>
        </button>
    </form>
</template>

<script>
    import VuetifulForm from 'vuetiful-forms/src/components/VuetifulForm';

    export default {
        name: 'VForm',
        extends: VuetifulForm,

        props: {
            route: {
                default: 'save',
            },
            method: {
                default: 'post',
            }
        },

        mounted() {
            this.form.setInertiaInstance(this.$inertia);
            this.form.setActionUrl(this.$page.routes[this.route]);
            this.form.setActionMethod(this.method);
        }
    }
</script>
