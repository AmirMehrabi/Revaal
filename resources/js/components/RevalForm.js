class RevalForm {
    constructor(data) {
        this.originalData = {};

        // Object.assign(this.originalData, data);
        this.originalData = JSON.parse(JSON.stringify(data));

        Object.assign(this, data);

        this.errors = {};

    }

    data() {
        let data = {};

        for (let attribute in this.originalData) {
            data[attribute] = this[attribute];
        }

        return data;
    }
    submit(endpoint) {
        axios.post(endpoint, this.data())
    }
}

export default RevalForm;
