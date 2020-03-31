<template>
    <label class="flex">
        <input @change="handleInput" :value="value" type="checkbox">
        <div class="mb-1 text-sm">
            <slot/>
            <error class="text-red-400" :error="error"></error>
        </div>
    </label>
</template>

<script>

    import VuetifulCheckbox from 'vuetiful-forms/src/components/VuetifulCheckbox';

    export default {
        name: 'VCheckbox',
        extends: VuetifulCheckbox,
    }
</script>

<style scoped>

</style>