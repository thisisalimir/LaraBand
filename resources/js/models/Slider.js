class Slider {
    static all(then) {
        return axios.get('/sliders')
            .then(({data}) => then(data));
    }
}

export default Slider;
