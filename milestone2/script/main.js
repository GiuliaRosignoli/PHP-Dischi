console.log('Vue', Vue);

const vm = new Vue({ //Vue instance
    el: '#vm',
    data: {
        discs: [],
    },

    created(){
     // get data
        const dataUrl = 'http://localhost/PHP%20Dischi/milestone2/scripts-php/database.php';

        axios.get(dataUrl).then(result=>{
            console.log(result.data);
            this.discs = result.data;
        })
        .catch(err =>{
            console.log(err);
        })
    }
});


//file:///C:/wamp64/www/PHP%20Dischi/milestone2/scripts-php/database.php