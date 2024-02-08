document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();
    // M.Sidenav.init(document.querySelectorAll('.sidenav'));
});

var page = new Vue({
    el: '#page',
    data(){
        return{
            value: 'VUE JS ON SERVICES'
        }
    },
    created() {
        this.setterData();
    },
    methods: {
        setterData(){
            console.log(this.value);
        }
    },
});