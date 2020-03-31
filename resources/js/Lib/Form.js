import {Form as FormGuard} from 'form-guard';

export default class Form extends FormGuard {

    setInertiaInstance(inertia) {
        this.inertia = inertia;
    }

    setActionUrl(url) {
        this.ationUrl = url;
    }

    setActionMethod(method = 'post') {
        this.actionMethod = method;
    }
}