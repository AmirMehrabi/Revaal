class RevalForm {
    constructor(data) {
        this.originalData = {};

        // Object.assign(this.originalData, data);
        this.originalData = JSON.parse(JSON.stringify(data));

        Object.assign(this, data);

        this.errors = {};

        this.submitted = false;

    }

    data() {
        let data = {};

        for (let attribute in this.originalData) {
            data[attribute] = this[attribute];
        }

        return data;
    }
    submit(endpoint) {
        return axios.post(endpoint, this.data())
            .catch(this.onFail.bind(this))
            .then(this.onSuccess.bind(this))
    }

    onSuccess(response) {
        this.submitted = true;
        return response;
    }

    onFail(error) {
        this.errors = error.response.data.errors;

        throw error;
    }

    reset() {
        Object.assign(this, this.originalData);
    }
}

export default RevalForm;
