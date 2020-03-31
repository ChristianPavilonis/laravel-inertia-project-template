import Form from '../Lib/Form';

export default class RegisterForm extends Form {

    constructor(name = '', email = '', password = '', passwordConfirm = '') {
        super();
        this.name            = name;
        this.email           = email;
        this.password        = password;
        this.passwordConfirm = passwordConfirm;
    }

    rules() {
        return {
            name: ['required'],
            email: ['email', 'required'],
            password: ['required', 'min:8:chars'],
            passwordConfirm: ['required', (field) => {
                if(field.value !== this.password) return 'Passwords must match!'
            }],
        }
    }

    submit() {
        return this.inertia.post('/register', {
            name: this.name,
            email: this.email,
            password: this.password,
            password_confirmation: this.passwordConfirm,
        });
    }

}