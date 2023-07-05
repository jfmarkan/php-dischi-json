const { createApp } = Vue;

createApp({
    data() {
        return {
                apiUrl : './server.php',
                discs : [],
                selectedDisc: null,
        }
    },

    methods: {
        getDiscs(){
            axios.get(this.apiUrl, {
                params: {}
            })
            .then((response)=> {
                this.discs = response.data;
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            })
        },
        openDisc(disc){
            console.log('start');
            if (disc >= this.discs.length || disc < 0){
                return ;
            }
            this.selectedDisc = disc;
            console.log(this.selectedDisc);
        },
        closeInfo(){
            this.selectedDisc = null;
        }
    },

    created() {
        this.getDiscs();
    },

}).mount('#app');