<template>
    <div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb be-main-breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Employees
                </li>
            </ol>
        </nav>

        <div v-if="showMessage">
            <div class="alert alert-success">
                {{ message }}
            </div>
        </div>

        <div class="card be-content-inner">
            <h5 class="card-header be-content-header">
                <router-link
                    to="/employees/create"
                    class="btn btn-primary float-right"
                >
                    <i class="fas fa-plus-circle"></i>
                    Add Employee
                </router-link>
            </h5>
            <div class="card-body be-content-body">
                <form class="form-inline">
                    <label class="sr-only">Name</label>
                    <input
                        type="text"
                        v-model.lazy="search"
                        class="form-control mb-2 mr-sm-2"
                        placeholder="Search"
                    />

                    <button type="submit" class="btn btn-primary mb-2">
                        <i class="fas fa-search"></i>
                    </button>

                    <div class="col-md-3 mb-2">
                        <select
                            class="custom-select"
                            v-model="selectedDepartment"
                        >
                            <option value="" selected>Select Department</option>
                            <option
                                v-for="department in departments"
                                :key="department.id"
                                :value="department.id"
                                >{{ department.name }}</option
                            >
                        </select>
                    </div>
                </form>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#Id</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Department</th>
                            <th scope="col">Address</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="employee in employees" :key="employee.id">
                            <th scope="row">{{ employee.id }}</th>
                            <td>{{ employee.first_name }}</td>
                            <td>{{ employee.last_name }}</td>
                            <td>{{ employee.department.name }}</td>
                            <td>{{ employee.first_name }}</td>
                            <td>
                                <router-link
                                    :to="{
                                        name: 'EmployeeEdit',
                                        params: { id: employee.id }
                                    }"
                                    class="btn btn-success"
                                    >Edit</router-link
                                >
                                <button
                                    class="btn btn-danger"
                                    @click="deleteEmployee(employee.id)"
                                >
                                    Delete
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
import axios from "axios";
import moment from "moment";
export default {
    data() {
        return {
            employees: [],
            showMessage: false,
            message: "",
            search: null,
            selectedDepartment: null,
            departments: []
        };
    },
    watch: {
        search() {
            this.getEmployees();
        },
        selectedDepartment() {
            this.getEmployees();
        }
    },
    created() {
        this.getDepartments();
        this.getEmployees();
    },
    methods: {
        getDepartments() {
            axios
                .get("/api/employees/departments")
                .then(res => {
                    this.departments = res.data;
                })
                .catch(error => {
                    console.log(error);
                });
        },
        getEmployees() {
            axios
                .get("/api/employees", {
                    params: {
                        search: this.search,
                        department_id: this.selectedDepartment
                    }
                })
                .then(res => {
                    this.employees = res.data.data;
                    console.log(this.employees);
                })
                .catch(error => {
                    console.log(error);
                });
        },
        deleteEmployee(id) {
            axios
                .delete(`/api/employees/${id}`)
                .then(res => {
                    this.message = res.data;
                    this.showMessage = true;
                    this.getEmployees();
                })
                .catch(error => {
                    console.log(error);
                });
        }
    }
};
</script>
<style lang=""></style>
