<template>
    <layout>
        <v-form :form="form">
            <div class="mb-4">
                <v-input v-model="form.email" type="email" :error="form.validator.getError('email')">
                    Email
                </v-input>
                <v-input v-model="form.password" type="password" :error="form.validator.getError('password')">
                    Password
                </v-input>
            </div>
        </v-form>
    </layout>
</template>

<script>

    import Layout    from '../Lib/Layouts/DefaultLayout';
    import VInput    from '../Lib/Components/Form/VInput';
    import VForm     from '../Lib/Components/Form/VForm';
    import LoginForm from './LoginForm';

    export default {
        name: 'Login',
        components: {Layout, VInput, VForm},
        data() {
            return {
                form: new LoginForm(),
            }
        },
    }
</script>

<style scoped>

</style>