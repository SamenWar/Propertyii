<template>
    <h3>Select Category</h3>
    <select v-model="colum" class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="id">Id</option>
        <option value="name">Name</option>
        <option value="bathrooms">Bathrooms</option>
        <option value="badrooms">Badrooms</option>
        <option value="Garage">Garage</option>
        <option value="Storeys">Storeys</option>
        <option value="Prise">Prise</option>
    </select>
    <input type="text" v-model="query" placeholder="Enter search phrase...">
    <button @click="SearchMeth" class="btn">Search</button>
    <table class="table" v-show="!!results.length">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Bathrooms</th>
            <th scope="col">Badrooms</th>
            <th scope="col">Garage</th>
            <th scope="col">Storeys</th>
            <th scope="col">Prise</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="result in results">
            <th scope="row">{{result.id}}</th>
            <td>{{result.name}}</td>
<!--            <td>{{result.bathrooms}}</td>-->
<!--            <td>{{result.badrooms}}</td>-->
<!--            <td>{{result.garage}}</td>-->
<!--            <td>{{result.Storeys}}</td>-->
<!--            <td>{{result.Prise}}</td>-->
        </tr>
        </tbody>
    </table>

    <H1>search-template</H1>
</template>




<script>
import axios from "axios";

export default {


    data: () => ({
        query:'',
        colum:'',
        results:'',


    }),
    methods:
        {
            SearchMeth() {
                axios.post('/api/Hauses/search', {
                    query: this.query.toString(),
                    colum: this.colum.toString()
                })
                    .then(function (response) {
                        console.log(response.data)
                        this.results=response.data

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }

}
</script>

<style scoped>

</style>
