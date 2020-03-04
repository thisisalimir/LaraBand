class Question {
    static all(then) {
        return axios.get('/question')
            .then(({data}) => then(data));
    }
}

export default Question;
