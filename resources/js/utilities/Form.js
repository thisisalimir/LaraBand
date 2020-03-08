import Errors from './Errors';

//Class for Form Process
class Form {

    constructor(data) {
        //set original data
        this.originalData = data;

        //get field throw loop in data and also declare field let so out of scope its not change
        for (let field in data) {
            this[field] = data[field];
        }
        //if error pass to Error Class
        this.errors = new Errors();
    }

    //Get Data
    data() {
        let data = {};
        for (let property in this.originalData) {
            data[property] = this[property];
        }

        //and return data
        return data;
    }

    //reset form
    reset() {
        //loop and set to null
        for (let field in this.originalData) {
            this[field] = '';
        }

        //clear error
        this.errors.clear();

    }

    //shorthand for post
    post(url) {
        return this.submit('post', url);
    }

    //shorthand for delete
    delete(url) {
        return this.submit('delete', url);
    }

    //submit form
    submit(requestType, url) {
        //Use Promise(its on ES6 which means when that things happen i promise do this)
        return new Promise((resolve, reject) => {
            //using axios and pass url and data from data object
            axios[requestType](url, this.data())
            //when success
                .then(response => {
                    this.onSuccess(response.data);

                    resolve(response.data);
                })
                //when fail
                .catch(error => {
                    this.onFail(error.response.data.errors);
                    reject(error.response.data.errors);
                });
        });
    }

    //on Success reset form
    onSuccess(data) {
        this.reset();
    }

    onFail(errors) {
        //when fail we record error and pass it to Errors Class
        this.errors.record(errors);
    }
}

export default Form;
