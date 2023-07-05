const { createApp } = Vue;

createApp({
    data() {
        return {
                apiUrl : './server.php',
                discs : [],
        }
    },

    methods: {
        getDiscs(){
            axios.get(this.apiUrl, {
                params: {}
            })
            .then((response)=> {
                console.log(response);
                this.discs = response.data;
            })
            .catch(function (error) {
                console.log(error);
            })
        }
    },

    created() {
        this.getDiscs();
    },
}).mount('#app');