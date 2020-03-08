//Error Class
class Errors {

    //set our class to empty object
    constructor() {
        this.errors = {};
    }

    //check if has error for show span error
    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    //check if there is error to disable button
    any() {
        return Object.keys(this.errors).length > 0;
    }

    //check if there is error get the error msg
    get(field) {
        if (this.errors[field]) {
            //error store in first array of field
            return this.errors[field][0]
        }
    }

    //record the error
    record(errors) {
        this.errors = errors;
    }

    //clear the error for remove validation message
    clear(field) {
        if (field) {
            //If there is error validation we show it until type so if other input fill its stool show error
            delete this.errors[field];
            return;
        }
        this.errors = {};
    }
}

export default Errors;
