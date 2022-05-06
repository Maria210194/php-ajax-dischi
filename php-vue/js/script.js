const app = new Vue({
    el: '#app',
    data() {
        return {
            discs: [],
        }
    },
    mounted() {
        axios
            .get('http://localhost:8888/php-vue/apiDiscs.php')
            .then((response) => {
                this.discs = response.data;
                console.log(this.discs);

            })
            .catch((error) => {
                console.log(error);
            });
    }
});   