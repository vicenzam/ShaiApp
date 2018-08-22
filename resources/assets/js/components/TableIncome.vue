<template>
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Detalle</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Tags</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(income, id) in incomes.incomes" :key="id">
                    <td>{{ income.name }}</td>
                    <td>{{ income.amount }}</td>
                    <td>{{ income.date }}</td>
                    <td><span class="circle-tag"></span></td>
                </tr>                            
            </tbody>
        </table>

        <h2>TAG</h2>
        <ul v-for="(tag, id) in incomes.tags" :key="id">
            <li>{{ tag.color }}</li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        data(){
            return {
                incomes: []               
            }
        },
        created: function () {
            this.getIncomes();
        },
        methods:{
            getIncomes: function () {
                var urlIdeas = 'incomes';
                axios.get(urlIdeas).then(response => {
                    this.incomes = response.data;
                });
            },
        }
    }
</script>
