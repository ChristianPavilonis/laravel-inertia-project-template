import Form from '../Lib/Form';

export default class LoginForm extends Form {

    constructor(email = '', password = '') {
        super();
        this.email    = email;
        this.password = password;
    }

    rules() {
        return {
            email: ['email', 'required'],
            password: ['required'],
        }
    }

    submit() {
        return this.inertia.post('/login', {email: this.email, password: this.password});
    }

}