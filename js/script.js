const {createApp} = Vue

createApp({
    data(){
        return{
            dischi:[]
        }
    },
    mounted(){
        axios.get("http://localhost/booleanphp/php-dischi-json/server.php")
        .then((resp) => {
            console.log(resp);
            this.dischi = resp.data.results
        })
    }
}).mount('#app')