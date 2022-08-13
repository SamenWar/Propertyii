<template>
    <h3>Select Category</h3>
    <select v-model="fieldToSearch" class="form-select" aria-label="Default select example">
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
    <table class="table" v-show="!!getHouses.length">
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
        <tr v-for="house in getHouses">
            <th scope="row">{{house.id}}</th>
            <td>{{house.name}}</td>
            <td>{{house.bathrooms}}</td>
            <td>{{house.badrooms}}</td>
            <td>{{house.garage}}</td>
            <td>{{house.Storeys}}</td>
            <td>{{house.Prise}}</td>
        </tr>
        </tbody>
    </table>
    <div v-show="!getHouses.length">
        <h3>Houses not found</h3>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Properties",
    data: () => ({
        houses: [],
        errors: [],
        fieldToSearch: 'name',
        query: '',

    }),
    created() {
        axios.get('/api/Hauses')
            .then(response => {
                if (response.data.data) {
                    this.houses = response.data.data
                }
            })
            .catch(e => {
                this.errors.push(e)
            })
    },
    computed: {
        getHouses() {
            const lowerCaseQuery = this.query.toLowerCase()



            return this.houses.filter(house => house[this.fieldToSearch].toString().toLowerCase().includes(lowerCaseQuery))
        }
    }
}

</script>

<style scoped>

</style>
