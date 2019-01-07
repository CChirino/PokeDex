<template>
<div class="container">
    <h1 class="text-center pt-4 pb-4"> Listado de Pokemons</h1>
    <div class="row">
            <div class="col-sm">
                <div class="card text-center" style="width: 18rem;margin-top: 30px;margin-bottom: 10px;">
                        <img src="images/" class="card-img-top rounded-circle mx-auto d-block" style="height:200px; width:200px; margin: 20px;">
                        <div class="card-body">
                        <h5 class="card-title">{{pokemon.name}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/trainers/" class="btn btn-primary">Ver mas...</a>
                        </div>
                </div>
            </div>
    </div>
</div>
</template>

<script>
export default {
    data(){
        return{
            pokemons: []
        }
    },

    mounted(){
        axios.get('http://127.0.0.1:8000/pokemons').then(response => (this.pokemons = response.data) )
    }
}
</script>


