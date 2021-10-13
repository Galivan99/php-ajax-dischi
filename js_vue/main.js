Vue.config.devtools = true;

const app = new Vue ({
    el:"#root",
    data : {
        dischi : [],
        generi : [],
        selected : "All"
    },
    methods: {
        axios () {
            axios.get("general_data/main.php")
        .then((res) => {
            console.log(res.data);
            this.dischi = res.data;
        });
        },
        genreSerch(){
            axios.get("general_data/main.php")
        .then((res) => {
            console.log(res.data);
            for(let i = 0; i < res.data.length; i++) {
                if (!this.generi.includes(res.data[i].genre)){
                        this.generi.push(res.data[i].genre)
                }
            }
        });
        },
    },
    created() {
        this.axios()
        this.genreSerch()
        this.albumFilter ()
    },
    computed : {
        genresHeaderFilter() {
            let filterDisc = this.dischi.filter((el)=>{
              console.log(el.genre)
              if(this.selected == "All"){
                return true
              }
              else if (this.selected == el.genre) {
                return true
              }
            })
            return filterDisc
        }
    }
});