<template>
    <label>
        <div class="mb-1 text-sm">
            <slot/>
            <error class="text-red-400" :error="error"></error>
        </div>
        <input class="border rounded px-1 py-2 text w-full" :value="value" @input="handleInput($event)" :type="type" :placeholder="placeholder" :name="inputName">
    </label>
</template>

<script>
    import VuetifulInput from 'vuetiful-forms/src/components/VuetifulInput';
    import Error from 'vuetiful-forms/src/components/Error';
    export default {
        name: 'VInput',
        extends: VuetifulInput,
        components: {Error},
    }
</script>

<style scoped>

</style>