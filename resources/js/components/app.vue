<template>
    <div class="container">
        <h1>Property Catalog</h1>
<!--        <search></search>-->
        <Properties></Properties>
        <AddProperty></AddProperty>
    </div>
</template>

<script>
import Properties from "./landing/properties";
//import search from "./landing/search";
import AddProperty from "./landing/add-property";

export default {
    name: 'app',
    components: {
        AddProperty,
        //search,
        Properties
    }
}

</script>
