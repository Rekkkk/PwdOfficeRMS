<template>
    <div>
    <div class="container">
        <h1>Account Management</h1>
         <button @click="viewAccountData()"> Create Package  </button>
        <!-- <a href="{{ route('create.account') }}" class="btn btn-success">Add User</a><br><br> -->
        <div class="row">
            <table class="table" style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">Account ID</th>
                        <th scope="col">Last name</th>
                        <th scope="col">First name</th>
                        <th scope="col">Middle name</th>
                        <th scope="col">Handle Barangay</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="account in accountList" :key="account.user_id">
                        <td>{{ account.user_id }}</td>
                        <td>{{ account.last_name }}</td>
                        <td>{{ account.first_name }}</td>
                        <td>{{ account.middle_name }}</td>
                        <td>Wala pa</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</template>
<script>

    export default {
        props:['accounts'],

        data(){
            return {
                accountList: this.accounts
            }
        },
    }
</script>
