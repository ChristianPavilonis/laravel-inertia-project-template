<template>
    <layout>

        <v-form :form="form">
            <div class="mb-4">
                <v-input v-model="form.name" :error="form.validator.getError('name')">
                    Name
                </v-input>
                <v-input v-model="form.email" type="email" :error="form.validator.getError('email')">
                    Email
                </v-input>
                <v-input v-model="form.password" type="password" :error="form.validator.getError('password')">
                    Password
                </v-input>
                <v-input v-model="form.passwordConfirm" type="password"
                         :error="form.validator.getError('passwordConfirm')">
                    Password Confirmation
                </v-input>
            </div>

        </v-form>
    </layout>
</template>

<script>

    import Layout       from '../Lib/Layouts/DefaultLayout';
    import VInput       from '../Lib/Components/Form/VInput';
    import VForm        from '../Lib/Components/Form/VForm';
    import RegisterForm from './RegisterForm';

    export default {
        name: 'Register',
        components: {VInput, VForm, Layout},
        data() {
            return {
                form: new RegisterForm(),
            }
        },
    }
</script>

<style scoped>

</style>