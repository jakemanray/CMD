const app = new Vue({
    el: '#app',
    data: {
        selected_facultad:'',
        selected_departamento:'',
        departamentos:[],
    },
    methods: {
        loadDepartamentos(){
            axios.get('departamentos',{params:{facultad_id:this.selected_facultad}}).then((response)=>{
                this.departamentos=response.data;
            });
        }
    }
});
