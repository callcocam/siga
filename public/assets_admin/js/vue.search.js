
    new Vue({
    el:"#app",
    data:{
        title:"Hello Vue",
        assinaturas:[],
        servicos:[],
        testemunhos:[],
        configuracao:[],
        equipe:'O QUE OUTROS DIZEM SOBRE NOS',
        equipedesc:'Veja O que Nossos Seguidores Dizem Sobre Nos!'
    },

    ready:function() {
        var self=this;
        if($("#assinaturas").length){
        self.$http.get('/home/home/assinaturas').then(function(response){
            self.assinaturas=response.data;
        });
            self.$http.get('/home/home/initialsesseionpg').then(function(response){
               console.log(response.data);
            });
        }
    }
});